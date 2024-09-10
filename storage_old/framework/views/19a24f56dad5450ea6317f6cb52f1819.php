<?php $__env->startSection('title', !empty($request_type) ? $request_type : ''); ?>
<?php $__env->startSection('content'); ?>
<style>
    .icon-box-content h6 {
        font-size: 20px;
    }

    .para-type {
        font-size: 12px;
        margin: 10px 0 0;
        color: #0d1e67;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .para-type span {
        color: #dc354585;
    }

    .icon-box-content {
        width: 100% !important;
    }

    .icon-box-content h6 {
        margin-bottom: 10px;
    }

    .single-form-page {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 20px 0 50px;
    }

    .single-form-page input:-internal-autofill-selected {
        background: transparent !important;
    }

    .single-form-page .report_form_card_page {
        border: 1px solid #c1c1c1;
        padding: 15px 25px;
    }

    .single-form-page input:focus,
    .single-form-page input:hover {
        border: none !important;
    }

    .single-form-page .report_form_field {
        background: #2f34601a;
    }

    .single-form-page .report_form_field #message {
        padding: 10px 15px;
    }

    .single-form-page .report_form_field i {
        margin-top: 5px !important;
        color: #000 !important;
    }

    .single-form-page .report_form_field {
        border: 1px solid #ddd;
    }

    .single-form-page .CaptchaDiv {
        margin: 15px 0;
    }

    .single-form-page .form-submit-btn {
        margin-top: 0;
    }

    .single-form-page .form-submit-btnreport_form_input-field:focus,
    .single-form-page .form-submit-btnreport_form_input-field:hover {
        border: unset !important;
    }

    .single-form-page .CaptchaTxtField {
        border: 1px solid #c1c1c1;
    }

    .single-form-page .report_form_input-field::placeholder,
    .single-form-page textarea::placeholder {
        color: #000 !important;
    }

    .single-form-page .report_form_input-field,
    .report_form_input-field[type=text],
    .report_form_input-field[type=email],
    .report_form_input-field[type=email] {
        color: #fff !important;
    }

    .single-form-page .report_form_field input,
    .single-form-page .report_form_field textarea,
    .single-form-page .CaptchaTxtField {
        color: #000 !important;
    }

    #UserCaptchaCode {
        font-size: 13px !important;
    }

    .thankyou-icon {
        width: 110px;
    }

    .thank_you {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 40px 0;
    }

    a {
        text-decoration: none !important;
    }
</style>
<!-- Breadcrumb Start -->
<div class=" main-bg">
    <div class="container-fluid p-0">
        <div class="text-left iq-breadcrumb-one iq-bg-over black contact-us-banner report-view-banner   ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                            <h2 class="title"><?php echo e($request_type); ?></h2>
                            <ol class="breadcrumb main-bg">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><i class="fa fa-home mr-2"></i>Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(url('research-reports/'.Str::slug(Str::replace('&','and',$category_details->category_name) , '-').'/'.$category_details->id)); ?>"><?php echo e(!empty($category_details->category_name) ? $category_details->category_name : ''); ?></a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(url('/reports/'.$report_details->url.'/'.$report_details->id)); ?>"><?php echo e(!empty($report_details->title) ? App\Helpers\Helpers\Helper::getFirstFiveWords($report_details->title) : ''); ?></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- Sample Request Form -->
<?php echo $__env->make('front.layout.notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container pt-30">
    <div class="row">

        <div class="col-6 iq-icon-box iq-icon-box-style-5  bg-white iq-box-shadow wow fadeInUp" data-wow-duration="0.7s" style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;">
            <div class="icon-box-content">
                <h6>Report Title:</h6>
                <a href="<?php echo e(url('/reports/'.$report_details->url.'/'.$report_details->id)); ?>"><?php echo e(!empty($report_details->title) ? $report_details->title : ''); ?></a>
                <p class="para-type pb-5">Report Format: <span>PPT, PDF, WORD, EXCEL</span></p>
                <strong >Key Product Offerings :</strong>
                <ul>
                    <li>Production Analysis</li>
                    <li>Consumption Analysis</li>
                    <li>Consumer Analysis</li>
                    <li>Company Market Share</li>
                    <li>Regional and Segment Trends</li>
                    <li>Company Production Capacity</li>
                    <li>
                        Market Dynamics
                    </li>
                    <li>
                        Country Macro Economic Factors

                    </li>
                    <li>Investment Matrix</li>
                </ul>
            </div>
        </div>

        <div class=" col-6 mt-0 single-form-page <?php echo e(Session::has('success') ? 'd-none' : ''); ?>">
            <div class="report_form_card_page">

                <form action="<?php echo e(route('report.enquiry.store')); ?>" method="post" id="sample_request_form">
                    <div class="modal-discount-div <?php echo e(($request_slug == 'discount') ? '' : 'd-none'); ?>" id="modal_discount_form">
                        <h6 class="modal-discount-div-title">We found you Lucky you Availed 10% Discount !</h6>
                    </div>
                    <?php echo csrf_field(); ?>
                    <input type="hidden" id="request_type" name="request_type" value="<?php echo e($request_slug); ?>">
                    <input type="hidden" id="report_id" name="report_id" value="<?php echo e($report_details->id); ?>">
                    <input type="hidden" id="report_title" name="report_title" value="<?php echo e(!empty($report_details->title) ? $report_details->title : ''); ?>">
                    
                    <div class="report_form_field">
                        <i aria-hidden="true" class="ion ion-ios-person"></i>
                        <input type="text" id="name" name="name" class="report_form_input-field" placeholder="Full Name" value="<?php echo e(old('name')); ?>">
                    </div>
                    <?php if($errors->has('name')): ?>
                        <span class="text-danger"><b>*</b> <?php echo e($errors->first('name')); ?></span>
                    <?php endif; ?>

                    <div class="report_form_field">
                        <i aria-hidden="true" class="ion ion-ios-email"></i>
                        <input type="mail" id="email" name="email" class="report_form_input-field" placeholder="Email" value="<?php echo e(old('email')); ?>">
                    </div>
                    <?php if($errors->has('email')): ?>
                        <span class="text-danger"><b>*</b> <?php echo e($errors->first('email')); ?></span>
                    <?php endif; ?>

                    <div class="report_form_field">
                        <i aria-hidden="true" class="ion ion-ios-telephone"></i>
                        <input type="text" id="mobile_number" name="mobile_number" class="report_form_input-field" placeholder="Phone No." value="<?php echo e(old('mobile_number')); ?>">
                    </div>
                    <?php if($errors->has('mobile_number')): ?>
                        <span class="text-danger"><b>*</b> <?php echo e($errors->first('mobile_number')); ?></span>
                    <?php endif; ?>

                    <div class="report_form_field">
                        <i aria-hidden="true" class="ion ion-ios-list"></i>
                        <input type="text" id="designation" name="designation" class="report_form_input-field" placeholder="Designation" value="<?php echo e(old('designation')); ?>">
                    </div>
                    <?php if($errors->has('designation')): ?>
                        <span class="text-danger"><b>*</b> <?php echo e($errors->first('designation')); ?></span>
                    <?php endif; ?>

                    <div class="report_form_field">
                        <i aria-hidden="true" class="ion ion-briefcase"></i>
                        <input type="text" id="company_name" name="company_name" class="report_form_input-field" placeholder="Company" value="<?php echo e(old('company_name')); ?>">
                    </div>
                    <?php if($errors->has('company_name')): ?>
                    <span class="text-danger"><b>*</b> <?php echo e($errors->first('company_name')); ?></span>
                    <?php endif; ?>

                    <div class="report_form_field form-msg-box">
                        <i aria-hidden="true" class="ion ion-document-text"></i>
                        <span class="wpcf7-form-control-wrap your-message"><textarea id="message" name="message" cols="46" rows="12" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"><?php echo e(old('message')); ?></textarea></span>
                    </div>
                    <?php if($errors->has('message')): ?>
                    <span class="text-danger"><b>*</b> <?php echo e($errors->first('message')); ?></span>
                    <?php endif; ?>

                    <div class="col-lg-12">
                        <fieldset class="MainCaptchaDiv">
                            <?php if($errors->has('captcha')): ?>
                            <span class="text-danger"><b>*</b> <?php echo e($errors->first('captcha')); ?></span>
                            <?php endif; ?>
                            <span class="text-success" id="SuccessMessage" class="error"></span>
                            <div class="CaptchaDiv">
                                <div class='CaptchaWrap'>
                                    <div id="CaptchaImageCode" class="captcha CaptchaTxtField">
                                        <span><?php echo captcha_img(); ?></span>
                                    </div>
                                </div>
                                <div id="reload" class="ReloadBtn" title="Reload Image">
                                    <img src="<?php echo e(URL::asset('front/images/new-images/reports/recycle.png')); ?>" alt="" class="regenerate-img">
                                </div>
                                <div class="d-flex-div">
                                    <label for="">
                                        <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <button type="submit" class="form-submit-btn"> Send Message </button>

                </form>
            </div>
        </div>

    </div>

    <div class="thank_you  <?php echo e(Session::has('success') ? '' : 'd-none'); ?>">
        
        <h1>Thank You !</h1>
        <h3>Your Request Reached To Us</h3>
        <a class="mt-4" href="<?php echo e(url('/reports/'.$report_details->url.'/'.$report_details->id)); ?>"><i class="fa fa-arrow-circle-left"></i> Back</a>
    </div>
</div>

<!-- Sample Request Form -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<script>
    $('#reload').click(function() {
        $.ajax({
            type: 'GET',
            url: '<?php echo e(url("/reload-captcha")); ?>',
            success: function(data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wemarketresearch/public_html/resources/views/front/request_form/request_form.blade.php ENDPATH**/ ?>