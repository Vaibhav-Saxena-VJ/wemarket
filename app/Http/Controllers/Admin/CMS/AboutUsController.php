<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Arm_about_us;
use App\Traits\MediaTrait;
use App\Models\Arm_why_choose_us;
use App\Models\Arm_role_privilege;
use Yajra\DataTables\DataTables;
use Auth;
use Crypt;
use Arr;
use Storage;

class AboutUsController extends Controller
{
    use MediaTrait;
     public function index(){
        $role_id = Auth::guard('arm_admins')->user()->role_id;
        $RolesPrivileges = Arm_role_privilege::where('id', $role_id)->where('status', 'active')->select('privileges')->first();
        if (!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'cms_view') && str_contains($RolesPrivileges, 'page_content_view') && str_contains($RolesPrivileges, 'about_us_view')){
            $about= Arm_about_us::where('status','=','active')->first();
            return view('admin.cms.pages_content.about_us',compact('about'));
        }else {
            return redirect()->back()->with('error', 'Sorry, You Have No Permission For This Request!');
        }
     }

     public function store(Request $request){
        $role_id = Auth::guard('arm_admins')->user()->role_id;
        $RolesPrivileges = Arm_role_privilege::where('id', $role_id)->where('status', 'active')->select('privileges')->first();
        
        $id = $request->id;
        if ($request->section_id == '1') {
            if ($request->has('section_1_image_path')) {
                $input['section_1_image_path'] = $this->verifyAndUpload($request, 'section_1_image_path', 'images/about');
                $original_name = $request->file('section_1_image_path')->getClientOriginalName();
                $input['section_1_image_name'] = $original_name;
            }
            $input['section_1_heading'] = $request->section_1_heading;
            $input['section_1_description_1'] = $request->section_1_description_1;
            $input['section_1_description_2'] = $request->section_1_description_2;
            $input['our_mission'] = $request->our_mission;
            $input['our_mission_description'] = $request->our_mission_description;
            $input['our_values'] = $request->our_values;
            $input['our_values_description'] = $request->our_values_description;
            

            if (!empty($id)) {
                if (!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'about_us_edit')){
                    $input['modified_by'] = auth()->guard('arm_admins')->user()->id;
                    $input['modified_ip_address'] = $request->ip();
                    Arm_about_us::where('id', '=', $id)->update($input);
                    return redirect('/admin/about-us')->with('success', 'About us banner updated successfully!');
                }else {
                    return redirect()->back()->with('error', 'Sorry, You Have No Permission For This Request!');
                }
            } else {
                if (!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'about_us_add')){
                    $input['created_by'] = auth()->guard('arm_admins')->user()->id;
                    $input['created_ip_address'] = $request->ip();
                    Arm_about_us::create($input);
                    return redirect('/admin/about-us')->with('success', 'About us banner added successfully!');
                }else {
                    return redirect()->back()->with('error', 'Sorry, You Have No Permission For This Request!');
                }
            }
        }

       if ($request->section_id == '2') {
             $input['why_choose_us_heading'] = $request->why_choose_us_heading;
            $input['why_choose_us_description_1'] = $request->why_choose_us_description_1;
            $input['why_choose_us_description_2'] = $request->why_choose_us_description_2;

            if (!empty($id)) {
                if (!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'about_us_edit')){
                    $input['modified_by'] = auth()->guard('arm_admins')->user()->id;
                    $input['modified_ip_address'] = $request->ip();
                    Arm_about_us::where('id', '=', $id)->update($input);
                    return redirect('/admin/about-us')->with('success', 'About us banner updated successfully!');
                }else {
                    return redirect()->back()->with('error', 'Sorry, You Have No Permission For This Request!');
                }
            } else {
                if (!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'about_us_add')){
                    $input['created_by'] = auth()->guard('arm_admins')->user()->id;
                    $input['created_ip_address'] = $request->ip();
                    Arm_about_us::create($input);
                    return redirect('/admin/about-us')->with('success', 'About us banner added successfully!');
                }else {
                    return redirect()->back()->with('error', 'Sorry, You Have No Permission For This Request!');
                }
            }
        }
        if ($request->section_id == '3') {
            $input['meta_title'] = $request->meta_title;
            $input['meta_keyword'] = $request->meta_keyword;
            $input['meta_description'] = $request->meta_description;
            $input['schema_markup'] = $request->schema_markup;
            $input['og_meta'] = $request->og_meta;
            $input['twitter_meta'] = $request->twitter_meta;

            if (!empty($id)) {
                if (!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'about_us_edit')){
                    $input['modified_by'] = auth()->guard('arm_admins')->user()->id;
                    $input['modified_ip_address'] = $request->ip();
                    Arm_about_us::where('id', '=', $id)->update($input);
                    return redirect('/admin/about-us')->with('success', 'About us banner updated successfully!');
                }else {
                    return redirect()->back()->with('error', 'Sorry, You Have No Permission For This Request!');
                }
            } else {
                if (!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'about_us_add')){
                    $input['created_by'] = auth()->guard('arm_admins')->user()->id;
                    $input['created_ip_address'] = $request->ip();
                    Arm_about_us::create($input);
                    return redirect('/admin/about-us')->with('success', 'About us banner added successfully!');
                }else {
                    return redirect()->back()->with('error', 'Sorry, You Have No Permission For This Request!');
                }
            }
        }
      }


      public function store_why_choose_us_content(Request $request){
           $id = $request->id;
           if ($request->has('content_image_path')) {
                $input['content_image_path'] = $this->verifyAndUpload($request, 'content_image_path', 'images/why_choose_us');
                $original_name = $request->file('content_image_path')->getClientOriginalName();
                $input['content_image_name'] = $original_name;
            }
            $input['content_title'] = $request->content_title;
            $input['content_description'] = $request->content_description;
            


            if (!empty($id)) {
                $input['modified_by'] = auth()->guard('arm_admins')->user()->id;
                $input['modified_ip_address'] = $request->ip();
                Arm_why_choose_us::where('id', '=', $id)->update($input);
                return redirect('/admin/about-us')->with('success', 'About us banner updated successfully!');
            } else {
                $input['created_by'] = auth()->guard('arm_admins')->user()->id;
                $input['created_ip_address'] = $request->ip();
                Arm_why_choose_us::create($input);
                return redirect('/admin/about-us')->with('success', 'About us banner added successfully!');
            }
 }




    public function  data_table(Request $request)
    {

        $why_us_content= Arm_why_choose_us::where('status', '!=', 'delete')
        ->select('id', 'content_title','content_description','content_image_name','content_image_path','status')
        ->get();

        if ($request->ajax()) {

            return DataTables::of($why_us_content)
                ->addIndexColumn()


                ->addColumn('content_image_path', function ($row) {
                    return !empty($row->content_image_path) ? '<img src="' . url('/') . Storage::url($row->content_image_path) . '" alt="' . $row->content_image_name . '" class="table-img">' : '';
                })




                ->addColumn('content_tile', function ($row){
                    if (!empty($row->content_title)){
                        return ucfirst($row->content_title);
                    }
                })


                ->addColumn('content_description', function ($row) {
                    if (!empty($row->content_description)) {
                        return substr(strip_tags($row->content_description), 0, 100) . '...';
                    }
                })

                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . url('admin/why-us-content/' . Crypt::encrypt($row->id) . '/edit') . '"> <button type="button" data-id="' . $row->id . '" class="btn btn-warning btn-xs Edit_button" title="Edit"><i class="fa fa-pencil"></i></button></a>
                            <a href="javascript:void(0)" data-id="' . $row->id . '" data-table="arm_why_choose_us_content" data-flash="Banner Image Deleted Successfully!" class="btn btn-danger delete btn-xs" title="Delete"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })

                ->addColumn('status', function ($row) {
                    if ($row->status == 'active') {
                        $statusActiveBtn = '<a href="javascript:void(0)"  data-id="' .$row->id. '" data-table="arm_why_choose_us_content" data-flash="Status Changed Successfully!"  class="change-status"  ><i class="fa fa-toggle-on tgle-on  status_button" aria-hidden="true" title=""></i></a>';
                        return $statusActiveBtn;
                    } else {
                        $statusBlockBtn = '<a href="javascript:void(0)"  data-id="' .$row->id. '" data-table="arm_why_choose_us_content" data-flash="Status Changed Successfully!" class="change-status" ><i class="fa fa-toggle-off tgle-off  status_button" aria-hidden="true" title=""></></a>';
                        return $statusBlockBtn;
                    }
                })

                ->rawColumns(['action', 'status','content_image_path'])
                ->make(true);
        }
    }


    public function why_us_content_edit(Request $request){
        $id=Crypt::decrypt($request->id);
        $why_us_content = Arm_why_choose_us::where('id', '=', $id)->first();
        $about = Arm_about_us::where('status', '=', 'active')->first();
        return view('admin.cms.pages_content.about_us', compact('about','why_us_content'));
     }



     public function show(){
        $about = Arm_about_us::where('status', '=', 'active')->first();
        $why_us_content = Arm_why_choose_us::where('status','=','active')->get();
        return view('front.about-us',compact('about','why_us_content'));
     }


         





}




