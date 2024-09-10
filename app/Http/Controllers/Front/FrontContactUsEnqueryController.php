<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Arm_contact_us_query;
use App\Models\Arm_general_settings;
use App\Mail\ContactUsEnquery;
use App\Mail\ContactThankYouMail;
use Stevebauman\Location\Facades\Location;
use Validator;
use Mail;
use Throwable;

class FrontContactUsEnqueryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(
            $rules = [
                'fname' => 'required|string|max:100',
                'email' => 'required|email|max:100',
                'phone' => 'required|max:15',
                'designation' => 'max:255',
                'captcha' => 'required|captcha',
            ],[
                'captcha.captcha' => 'Please Enter Correct Capcha',
                'fname' => 'The name field is required',
            ]
        );
            
        $input['fname'] = $request->fname;
        $input['lname'] = $request->lname;
        $input['email'] = $request->email;
        $input['phone'] = $request->phone;
        $input['designation'] = $request->designation;
        $input['company_name'] = $request->company;
        $input['message'] = $request->message;
        $currentUserInfo = $request->ip() != "127.0.0.1" ? Location::get($request->ip()) : false;
        $input['country'] = $currentUserInfo ? $currentUserInfo->countryName : '' ;
        $input['created_ip_address'] = $request->ip();
        $data= Arm_contact_us_query::create($input);
        if(!empty($data)){
            $mailData = [
                'name' => $input['fname']." ".$input['lname'],
                'phone' => $input['phone'],
                'email' => $input['email'],
                'company_name' => $input['company_name'],
                'message' => $input['message'],
            ];
            $name= $input['fname'] .' '. $input['lname'];
            try{
                $sales_email = Arm_general_settings::get('email')->first();
                \Mail::to($sales_email->email)->send(new ContactUsEnquery($mailData));
                \Mail::to($input['email'])->send(new ContactThankYouMail($mailData));
            }catch(Throwable $e){
                return redirect()->back()->with('warning', 'Thank You ! Your Request Reached To Us, Mail Not Send , Make Sure Email is Right Or Network Connection is Proper');
            }
            return redirect('thankyou');
        }else {
            return redirect()->back()->with('error', 'Something Error');
        }
    }

    public function thankyou(Request $request){
        return view('front.request_form.contact-thankyou');
    }
}
