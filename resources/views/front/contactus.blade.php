@extends('front.layout.layout')
@section('title','Contact Us')
@section('head')
    <meta name='robots' content='index,follow, max-image-preview:large/' />
@endsection
@section('content')

<style>
    .iq-contact-frame textarea {
border-radius: 6px;
    }
    .MainCaptchaDiv #CaptchaImageCode {
    width: 243px !important;
    height: 51px !important;
}
    .MainCaptchaDiv #CapCode, .MainCaptchaDiv #UserCaptchaCode {
    height: 51px !important;
}
.MainCaptchaDiv .CaptchaTxtField {
    border-radius: 6px;
}
    .MainCaptchaDiv #UserCaptchaCode {
    margin-bottom: 0 !important;
    border: 1px solid #eeeeee !important;
    color: #59597e !important;
    padding: 5px 20px 5px 20px !important;
    border-radius: 6px;
}
.MainCaptchaDiv {
    margin-bottom: 30px;
}
</style>
@include('front.layout.notifications')
<!-- Breadcrumb Start -->
<div class=" main-bg">
    <div class="container-fluid p-0">
        <div class="text-left iq-breadcrumb-one iq-bg-over black contact-us-banner    ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                            <h2 class="title">Contact Us</h2>
                            <ol class="breadcrumb main-bg">
                                <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fa fa-home mr-2"></i>Home</a></li>
                                <li class="breadcrumb-item active">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- Iconbox Start -->
<section class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-4  col-md-6">
                <div class="iq-icon-box iq-icon-box-style-2 text-left ">

                    <div class="icon-box-img">
                        <i aria-hidden="true" class="ion ion-ios-location"></i>
                    </div>
                    <div class="icon-box-content">
                        <h5 class="icon-box-title"><a href="javascript:void(0)">Location</a></h5>
                        <p class="icon-box-desc">{{!empty($contacts->address)?$contacts->address:''}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6">
                <div class="iq-icon-box iq-icon-box-style-2 text-left ">
                    <div class="icon-box-img">
                        <i aria-hidden="true" class="ion ion-ios-email"></i>
                    </div>
                    <div class="icon-box-content">
                        <h5 class="icon-box-title"> <a href="javascript:void(0)">Email</a></h5>
                        <a href="mailto:{{!empty($contacts->email)?$contacts->email:''}}">{{!empty($contacts->email)?$contacts->email:''}}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6">
                <div class="iq-icon-box iq-icon-box-style-2 text-left ">
                    <div class="icon-box-img">
                        <i aria-hidden="true" class="ion ion-ios-telephone"></i>
                    </div>
                    <div class="icon-box-content">
                        <h5 class="icon-box-title"> <a href="javascript:void(0)">Phone</a></h5>
                        <a class="icon-box-desc" href="tel:{{!empty($contacts->mobile)?$contacts->mobile:''}}"><span>{{!empty($contacts->mobile)?$contacts->mobile:''}}</span></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Iconbox End -->

<section class="iq-contact-frame pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <iframe src="{{!empty($contacts->map_link)?$contacts->map_link:''}}" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-6 col-md-12 mt-5 mt-lg-0">
                <div class=" text-left iq-title-box iq-title-default iq-title-box-2">
                    <div class="iq-title-icon"></div>
                    <span class="iq-subtitle">Get In Touch</span>
                    <h2 class="iq-title">Contact With US </h2>
                </div>
                <div role="form" class="wpcf7" id="wpcf7-f790-p785-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="{{route('contact.us.query')}}" method="post" class="wpcf7-form" id="contact-form" novalidate="novalidate">
                        @csrf
                        <input type="hidden" name="type" value="contact">
                        <div class=row>
                            <div class="col-lg-6 col-md-6 ">
                                @if($errors->has('fname'))
                                    <span class="text-danger"><b>*</b> {{$errors->first('fname')}}</span>
                                @endif
                                <span class="wpcf7-form-control-wrap first-name">
                                    <input type="text" name="fname" value="{{ old('fname') }}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="First Name" />
                                </span>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                @if($errors->has('lname'))
                                    <span class="text-danger"><b>*</b> {{$errors->first('lname')}}</span>
                                @endif
                                <span class="wpcf7-form-control-wrap last-name">
                                    <input type="text" name="lname" value="{{ old('lname') }}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Last Name" />
                                </span>
                            </div>

                            <div class="col-lg-6">
                                @if($errors->has('email'))
                                    <span class="text-danger"><b>*</b> {{$errors->first('email')}}</span>
                                @endif
                                <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" name="email" value="{{ old('email') }}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email Address" />
                                </span>
                            </div>

                            <div class="col-lg-6">
                                @if($errors->has('phone'))
                                    <span class="text-danger"><b>*</b> {{$errors->first('phone')}}</span>
                                @endif
                                <span class="wpcf7-form-control-wrap tel-554">
                                    <input type="tel" name="phone" value="{{ old('phone') }}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" placeholder="Phone" />
                                </span>
                            </div>
                            <div class="col-lg-6">
                                <span class="wpcf7-form-control-wrap company">
                                    <input type="text" name="designation" value="{{ old('designation') }}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Enter Designation" />
                                </span>
                            </div>
                            <div class="col-lg-6">
                                @if($errors->has('company'))
                                    <span class="text-danger"><b>*</b> {{$errors->first('company')}}</span>
                                @endif
                                <span class="wpcf7-form-control-wrap company">
                                    <input type="text" name="company" value="{{ old('company') }}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Enter Company" />
                                </span>
                            </div>


                            <div class="col-lg-12">
                                @if($errors->has('message'))
                                    <span class="text-danger"><b>*</b> {{$errors->first('message')}}</span>
                                @endif
                                <p>
                                    <span class="wpcf7-form-control-wrap your-message">
                                        <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message">{{ old('message') }}</textarea>
                                    </span>
                                </p>
                            </div>

                            <div class="col-lg-12">
                                <fieldset class="MainCaptchaDiv">
                                    @if($errors->has('captcha'))
                                        <span class="text-danger"><b>*</b> {{$errors->first('captcha')}}</span>
                                    @endif
                                    <span class="text-success" id="SuccessMessage" class="error"></span>
                                    <div class="CaptchaDiv">
                                        <div class='CaptchaWrap'>
                                            <div id="CaptchaImageCode" class="captcha CaptchaTxtField">
                                                <span>{!! captcha_img() !!}</span>
                                            </div>
                                        </div>
                                        <div id="reload" class="ReloadBtn" title="Reload Image">
                                            <img src="{{URL::asset('front/images/new-images/reports/recycle.png')}}" alt="" class="regenerate-img" >
                                        </div>
                                        <div class="d-flex-div">
                                            <label for="">
                                                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" value="Send" class="wpcf7-form-control wpcf7-submit form-submit-btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
@section('script')

<script type="text/javascript">
    $("#navbar").removeClass("nav-page");
    $("#navbar").addClass("banner-page-nav");
</script>
<script type="text/javascript">
    $(".home_active").removeClass("active");
    $(".contact_active").addClass("active");
</script>

<script>
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: '{{ url("/reload-captcha") }}',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>

@endsection