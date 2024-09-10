<?php if(Request::is('*toc/*')==true): ?>
<?php $__env->startSection('title',!empty($report_details->meta_title_toc)?$report_details->meta_title_toc:''); ?>
<?php $__env->startSection('meta_keywords',!empty($report_details->meta_keyword_toc)?$report_details->meta_keyword_toc:''); ?>
<?php $__env->startSection('meta_description', !empty($report_details->meta_description_toc)?$report_details->meta_description_toc:''); ?>
<?php elseif(Request::is('*research-methodology/*')==true): ?>
<?php $__env->startSection('title',!empty($report_details->meta_title_rm)?$report_details->meta_title_rm:''); ?>
<?php $__env->startSection('meta_keywords',!empty($report_details->meta_keyword_rm)?$report_details->meta_keyword_rm:''); ?>
<?php $__env->startSection('meta_description', !empty($report_details->meta_description_rm)?$report_details->meta_description_rm:''); ?>
<?php elseif(Request::is('*request-free-sample-pdf/*')==true): ?>
<?php $__env->startSection('title',!empty($report_details->meta_title_rfsp)?$report_details->meta_title_rfsp:''); ?>
<?php $__env->startSection('meta_keywords',!empty($report_details->meta_keyword_rfsp)?$report_details->meta_keyword_rfsp:''); ?>
<?php $__env->startSection('meta_description', !empty($report_details->meta_description_rfsp)?$report_details->meta_description_rfsp:''); ?>
<?php elseif(Request::is('*reports/*')==true): ?>
<?php $__env->startSection('title',!empty($report_details->meta_title)?$report_details->meta_title:''); ?>
<?php $__env->startSection('meta_keywords',!empty($report_details->meta_keyword)?$report_details->meta_keyword:''); ?>
<?php $__env->startSection('meta_description', !empty($report_details->meta_description)?$report_details->meta_description:''); ?>
<?php endif; ?>

<?php $__env->startSection('head'); ?>
<meta name='robots' content='index,follow, max-image-preview:large/' />
<?php echo !empty($report_details->og_meta)?$report_details->og_meta:''; ?>

<?php echo !empty($report_details->twitter_meta)?$report_details->twitter_meta:''; ?>

<?php echo !empty($report_details->schema_markup)?$report_details->schema_markup:''; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<style>
    .sticky-form {
        position: static;
        width: 100%;
    }

    .for-fixed {
        width: 365px !important;
    }

    .for-static {
        width: 100% !important;
    }

    .nav-pills {
        position: static;
        top: 0;
    }

    .nav-pills.sticky {
        position: fixed;
        top: 11.5%;
        width: 772px;
        background: #fff !important;
    }

    .MainCaptchaDiv #CaptchaImageCode {
        width: 180px;
        border-radius: 6px;
    }

    .MainCaptchaDiv .CaptchaDiv {
        justify-content: unset;
        gap: 10px;
        width: 100%;
    }

    .MainCaptchaDiv #UserCaptchaCode {
        font-size: 13px;
        border-radius: 6px;
        padding: 5px 20px 5px 15px;
    }

    .MainCaptchaDiv #UserCaptchaCode::placeholder {
        color: #878787;
    }

    .MainCaptchaDiv {
        flex-direction: column;
        gap: 10px;
        padding: 10px;
    }

    .report-tab-content .row {
        display: unset;
        margin: unset;
    }

    .report-tab-content .row p {
        margin-left: 0 !important;
        margin-bottom: 10px !important;
    }

    .report-tab-content .row p.MsoNormal {
        text-indent: unset !important;
    }

    .report-tab-content h6,
    .report-tab-content table {
        margin-left: 0 !important;
    }

    .report-tab-content table tr td p.MsoNormal {
        padding: 0.75rem;
        margin-bottom: 0px !important;
        text-indent: unset !important;
        text-align: left !important;
    }

    .report-tab-content table tr:nth-child(1) td {
        background: #1b2b72 !important;
        text-align: left !important;
    }

    .report-tab-content table td {
        border: 1px solid #dddddd !important;
        padding: 0 !important;
        text-align: left !important;
    }

    .report-tab-content table td p strong {
        font-weight: 400 !important;
    }

    .report-tab-content .row .MsoListParagraph,
    .report-tab-content .row .MsoListParagraphCxSpFirst,
    .report-tab-content .row .MsoListParagraphCxSpLast,
    .report-tab-content .row .MsoListParagraphCxSpMiddle {
        text-align: left !important;
        text-indent: unset !important;
        display: flex !important;
    }

    #CheckDiscount .modal-dialog {
        margin: 2rem auto;
    }

    a {
        text-decoration: none !important;
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
                            <h1 class="title"><?php echo e(!empty($report_details->title) ? App\Helpers\Helpers\Helper::getFirstFiveWords($report_details->title) : ''); ?></h1>
                            <ol class="breadcrumb main-bg">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><i class="fa fa-home mr-2"></i>Home</a></li>
                                <li class="breadcrumb-item active"><a href="<?php echo e(url('research-reports/'.Str::slug(Str::replace('&','and',$category_details->category_name) , '-').'/'.$category_details->id)); ?>"><?php echo e(!empty($category_details->category_name) ? $category_details->category_name : ''); ?></a></li>
                                <li class="breadcrumb-item active"><a href=""><?php echo e(!empty($report_details->title) ? App\Helpers\Helpers\Helper::getFirstFiveWords($report_details->title) : ''); ?></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<?php echo $__env->make('front.layout.notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="light-gray-bg report-view-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="report-view-heading  wow fadeInLeft">
                    <div class="report-header-div">
                        <div class="report-view_img">
                            
                            <img src="<?php echo e(URL::asset('admin_panel/commonarea/dist/img/default1.jpg')); ?>" class="w-100 report-view-img" alt="report-image">
                        </div>
                        <div class="report-view_details">
                            <h2 style="padding-bottom: 10px;font-size: 20px;"><?php echo e(!empty($report_details->title) ? $report_details->title : ''); ?></h2>
                            <div class="report-view-details-tables">
                                <div class="detail-table-one">
                                    <ul>
                                        <li class="ul-title"> PUBLISHED ON </li>
                                        <li class="ul-sub-title"><?php echo e(!empty($report_details->published_on) ? $report_details->published_on : ''); ?></li>
                                    </ul>
                                    <ul>
                                        <li class="ul-title"> NO OF PAGES </li>
                                        <li class="ul-sub-title"><?php echo e(!empty($report_details->total_pages) ? $report_details->total_pages : ''); ?></li>
                                    </ul>
                                    <ul>
                                        <li class="ul-title"> CATEGORY </li>
                                        <li class="ul-sub-title"><?php echo e(!empty($category_details->category_name) ? $category_details->category_name : ''); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="report-tabs mb-4 wow fadeInLeft">
                    <div class="iq-tabs">
                        <ul class="nav nav-pills sticky-top" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link <?php echo e(Request::is('*toc/*') || Request::is('*research-methodology/*') || Request::is('*infographics/*') || Request::is('*request-free-sample-pdf/*') ? '' : 'active show'); ?>" href="<?php echo e(url('reports/'.$report_details->url.'/'.$report_details->id)); ?>" role="tab">
                                    <h6 class="tab-title">Description</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e(Request::is('*toc/*') ? 'active' : ''); ?>" href="<?php echo e(url('reports/toc/'.$report_details->url.'/'.$report_details->id)); ?>" role="tab">
                                    <h6 class="tab-title"> Table Of Contents </h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e(Request::is('*research-methodology/*') ? 'active' : ''); ?>" href="<?php echo e(url('reports/research-methodology/'.$report_details->url.'/'.$report_details->id)); ?>" role="tab">
                                    <h6 class="tab-title">Research Methodology</h6>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link <?php echo e(Request::is('*request-free-sample-pdf/*') ? 'active' : ''); ?>" href="<?php echo e(url('reports/request-free-sample-pdf/'.$report_details->url.'/'.$report_details->id)); ?>" role="tab">
                                    <h6 class="tab-title">Request Free Sample PDF</h6>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane <?php echo e(Request::is('*toc/*') || Request::is('*research-methodology/*') || Request::is('*infographics/*') || Request::is('*request-free-sample-pdf/*') ? '' : 'active show'); ?>" id="report-tab-1" role="tabpanel">
                                <div class="report-tab-content">
                                    <div class="row">
                                        <?php echo !empty($report_details->description) ? $report_details->description : ''; ?>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane <?php echo e(Request::is('*toc/*') ? 'active show' : ''); ?>" id="report-tab-2" role="tabpanel">
                                <div class="report-tab-content">
                                    <div class="row">
                                        <?php echo !empty($report_details->table_of_content) ? $report_details->table_of_content : ''; ?>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane <?php echo e(Request::is('*research-methodology/*') ? 'active show' : ''); ?>" id="report-tab-3" role="tabpanel">
                                <div class="report-tab-content">
                                    <div class="row">

                                        

                                        <section class="bg-white research-methodology iq-ptb-60">
                                            <div class="container">
                                                <div class="research-methodology-content">
                                                    <div class="rm-content">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInRight">
                                                                <div class=" text-left iq-title-default iq-title-box-2 ">
                                                                    <!-- <span class="iq-subtitle">About Us</span> -->
                                                                    <h2 class="iq-title text-capitalize"><?php echo e(!empty($research->section_1_heading)?$research->section_1_heading:''); ?></h2>
                                                                    <?php echo !empty($research->section_1_description)?$research->section_1_description:''; ?>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Section 1 -->
                                        <!-- Section 2 -->
                                        <section class="bg-gray research-methodology iq-ptb-60">
                                            <div class="container">
                                                <div class="research-methodology-content">
                                                    <div class="rm-content">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInRight">
                                                                <div class=" text-left iq-title-default iq-title-box-2 ">
                                                                    <h2 class="iq-title text-capitalize"><?php echo e(!empty($research->section_2_heading)?$research->section_2_heading:''); ?></h2>
                                                                    <?php echo !empty($research->section_2_description)?$research->section_2_description:''; ?>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Section 2 -->
                                        <!-- Section 3 -->
                                        <section class="bg-white research-methodology iq-ptb-60">
                                            <div class="container">
                                                <div class="research-methodology-content">
                                                    <div class="rm-content">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInRight">
                                                                <div class=" text-left iq-title-default iq-title-box-2 ">
                                                                    <!-- <span class="iq-subtitle">About Us</span> -->
                                                                    <h2 class="iq-title text-capitalize"><?php echo e(!empty($research->section_3_heading)?$research->section_3_heading:''); ?></h2>
                                                                    <?php echo !empty($research->section_3_description)?$research->section_3_description:''; ?>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Section 3 -->
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane <?php echo e(Request::is('*infographics/*') ? 'active show' : ''); ?>" id="report-tab-4" role="tabpanel">
                                <div class="report-tab-content">
                                    <div class="row">
                                        <?php if(!empty($report_details->image_1_path)): ?>
                                        <img src="<?php echo e(Storage::exists($report_details->image_1_path) ? url('/').Storage::url($report_details->image_1_path) : ''); ?>" class="w-100 report-view-img mb-4" alt="<?php echo e(!empty($report_details->image_1_name) && Storage::exists($report_details->image_1_path) ? $report_details->image_1_name : ''); ?>">
                                        <?php endif; ?>
                                        <?php if(!empty($report_details->image_2_path)): ?>
                                        <img src="<?php echo e(Storage::exists($report_details->image_2_path) ? url('/').Storage::url($report_details->image_2_path) : ''); ?>" class="w-100 report-view-img mb-4" alt="<?php echo e(!empty($report_details->image_2_name) && Storage::exists($report_details->image_2_path) ? $report_details->image_2_name : ''); ?>">
                                        <?php endif; ?>
                                        <?php if(!empty($report_details->image_3_path)): ?>
                                        <img src="<?php echo e(Storage::exists($report_details->image_3_path) ? url('/').Storage::url($report_details->image_3_path) : ''); ?>" class="w-100 report-view-img mb-4" alt="<?php echo e(!empty($report_details->image_3_name) && Storage::exists($report_details->image_3_path) ? $report_details->image_3_name : ''); ?>">
                                        <?php endif; ?>
                                        <?php echo !empty($report_details->infographics) ? $report_details->infographics : ''; ?>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane <?php echo e(Request::is('*request-free-sample-pdf/*') ? 'active show' : ''); ?>" id="report-tab-5" role="tabpanel">
                                <div class="report-tab-content">
                                    <div class="row">
                                        <div class="single-form-page <?php echo e(Session::has('success') ? 'd-none' : ''); ?>">
                                            <div class="report_form_card_page">

                                                <form action="<?php echo e(route('report.enquiry.store')); ?>" method="post" id="sample_request_form">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" id="request_type" name="request_type" value="request-free-sample-pdf">
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
                                                        <span class="wpcf7-form-control-wrap your-message"><textarea id="message" name="message" cols="46" rows="12" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message" value="<?php echo e(old('message')); ?>"></textarea></span>
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
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#menu" id="toggle"><span></span></a>

                    <div id="menu">
                        <ul>
                            <li><a href="<?php echo e(url('reports/'.$report_details->url.'/'.$report_details->id)); ?>" onclick="showFAQ()">Description</a></li>
                            <li><a href="<?php echo e(url('reports/toc/'.$report_details->url.'/'.$report_details->id)); ?>" onclick="hideFAQ()"> Table Of Contents </a></li>
                            <li><a href="<?php echo e(url('reports/research-methodology/'.$report_details->url.'/'.$report_details->id)); ?>" onclick="hideFAQ()">Research Methodology</a></li>
                            
                            <li><a href="<?php echo e(url('reports/request-free-sample-pdf/'.$report_details->url.'/'.$report_details->id)); ?>" onclick="hideFAQ()">Request Free Sample PDF</a></li>
                        </ul>
                    </div>
                </div>

                <?php
                $currentURL = $_SERVER['REQUEST_URI'];
                $searchWords = ['toc', 'research-methodology', 'infographics', 'request-free-sample-pdf'];
                $found = false;
                foreach ($searchWords as $word) {
                if (strpos($currentURL, $word) !== false) {
                $found = true;
                break;
                }
                }
                $hideclass = '';
                if ($found) {
                $hideclass = 'd-none';
                } else {
                $hideclass = '';
                }
                ?>

                <?php if(!empty($report_details->faq_status) && $report_details->faq_status == "active"): ?>
                <?php if(!empty($report_details->faq_question_1) || !empty($report_details->faq_question_2) || !empty($report_details->faq_question_3) || !empty($report_details->faq_question_4) || !empty($report_details->faq_question_5)): ?>
                <div class="report-view-faq <?php echo e($hideclass); ?> " id="faq-section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center iq-title-box iq-title-default iq-title-box-2">
                                <div class="iq-title-icon"> </div>
                                <h2 class="iq-title">Frequently Asked Questions</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="iq-accordion  iq-accordion-semi-round iq-accordion-classic">

                                <?php if(!empty($report_details->faq_question_1)): ?>
                                <div class="iq-accordion-block  1">
                                    <div class="iq-accordion-title" style="">
                                        <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                        <h5 class="mb-0 accordion-title"><?php echo e($report_details->faq_question_1); ?></h5>
                                    </div>
                                    <div class="iq-accordion-details">
                                        <p class="iq-content-text"><?php echo e($report_details->faq_answer_1); ?></p>
                                    </div>
                                </div>
                                <?php endif; ?>

                                <?php if(!empty($report_details->faq_question_2)): ?>
                                <div class="iq-accordion-block   2">
                                    <div class="iq-accordion-title">
                                        <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                        <h5 class="mb-0 accordion-title"><?php echo e($report_details->faq_question_2); ?></h5>
                                    </div>
                                    <div class="iq-accordion-details">
                                        <p class="iq-content-text"><?php echo e($report_details->faq_answer_2); ?></p>
                                    </div>
                                </div>
                                <?php endif; ?>

                                <?php if(!empty($report_details->faq_question_3)): ?>
                                <div class="iq-accordion-block   3">
                                    <div class="iq-accordion-title">
                                        <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                        <h5 class="mb-0 accordion-title"><?php echo e($report_details->faq_question_3); ?></h5>
                                    </div>
                                    <div class="iq-accordion-details">
                                        <p class="iq-content-text"><?php echo e($report_details->faq_answer_3); ?></p>
                                    </div>
                                </div>
                                <?php endif; ?>

                                <?php if(!empty($report_details->faq_question_4)): ?>
                                <div class="iq-accordion-block   4">
                                    <div class="iq-accordion-title">
                                        <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                        <h5 class="mb-0 accordion-title"><?php echo e($report_details->faq_question_4); ?></h5>
                                    </div>
                                    <div class="iq-accordion-details">
                                        <p class="iq-content-text"><?php echo e($report_details->faq_answer_4); ?></p>
                                    </div>
                                </div>
                                <?php endif; ?>

                                <?php if(!empty($report_details->faq_question_5)): ?>
                                <div class="iq-accordion-block   5">
                                    <div class="iq-accordion-title">
                                        <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                        <h5 class="mb-0 accordion-title"><?php echo e($report_details->faq_question_5); ?></h5>
                                    </div>
                                    <div class="iq-accordion-details">
                                        <p class="iq-content-text"><?php echo e($report_details->faq_answer_5); ?></p>
                                    </div>
                                </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endif; ?>

            </div>
            <div class="col-lg-4" id="scrollable-div">

                <div class="div-for-tablet sticky-form">
                    <div class="more-report-btns mb-4">
                        <div class="more-report-btns-forms">
                            <a class="button wow fadeInRight" href="<?php echo e(url('/sample-request/'.$report_details->url.'/'.$report_details->id)); ?>">Sample Request </a>
                            <a class="button wow fadeInRight" href="<?php echo e(url('/customization/'.$report_details->url.'/'.$report_details->id)); ?>"> Customized Requirement </a>
                            <a class="button wow fadeInRight" href="<?php echo e(url('/analyst/'.$report_details->url.'/'.$report_details->id)); ?>"> Speak to Analyst </a>
                            <a class="button wow fadeInRight" href="<?php echo e(url('/discount/'.$report_details->url.'/'.$report_details->id)); ?>"> Check Discount </a>
                        </div>
                    </div>

                    <div class="plans-detail mb-4 wow fadeInRight">
                        <!-- dynamic action url in js -->
                        <form action="" method="get" id="license_type_submit_form">
                            <div class="plans-detail_header">
                                <h6>CHOOSE LICENSE TYPE</h6>
                            </div>
                            <div class="plans-detail_cards form-check">

                                <div class="plans-detail_card green container-tick form-check-label" for="exampleRadios1">
                                    <input class="form-check-input" type="radio" name="license" id="exampleRadios1" value="single" checked="checked">
                                    <label for="exampleRadios1" class="form-check-label tip">Single User Access - $ <?php echo e(!empty($report_details->single_user_cost) ? $report_details->single_user_cost : ''); ?> </label>
                                </div>
                                <div class="plans-detail_card green form-check-label" for="exampleRadios2">
                                    <input class="form-check-input" type="radio" name="license" id="exampleRadios2" value="multi">
                                    <label for="exampleRadios2" class="form-check-label tip">Multi User Access - $ <?php echo e(!empty($report_details->multi_user_cost) ? $report_details->multi_user_cost : ''); ?> </label>
                                </div>
                                <div class="plans-detail_card green ">
                                    <input class="form-check-input" type="radio" name="license" id="exampleRadios3" value="enterprise">
                                    <label for="exampleRadios3" class="form-check-label tip">Corporate Access - $ <?php echo e(!empty($report_details->enterprise_user_cost) ? $report_details->enterprise_user_cost : ''); ?> </label>
                                </div>
                            </div>
                            <div class="plans-detail_btns">
                                <button id="license_type_button" class="Btn">Buy Now</button>
                            </div>
                        </form>
                    </div>

                </div>

                <div class="recent-reports">
                    <?php if($related_reports->count() > 0): ?>
                    <div class="recent-reports_heading">
                        <h6>Related Reports</h6>
                    </div>
                    <?php $__currentLoopData = $related_reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related_report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(url('/reports/'.$related_report->reports->url.'/'.$related_report->reports->id)); ?>">
                        <div class="iq-icon-box iq-icon-box-style-2 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="icon-box-img">
                                
                                <img src="<?php echo e(URL::asset('admin_panel/commonarea/dist/img/default1.jpg')); ?>" class="w-100 img-fluid" alt="report-image">
                            </div>
                            <div class="icon-box-content">
                                <h5 class="icon-box-title"><?php echo e(!empty($related_report->reports->title) ? $related_report->reports->title : ''); ?></h5>
                                <p class="icon-box-desc dec-title"><?php echo e(!empty($related_report->reports->category_id) ? App\Helpers\Helpers\Helper::getCategoryNameById($related_report->reports->category_id) : ''); ?></p>
                                <p class="icon-box-desc"><?php echo e(!empty($related_report->reports->published_on) ? $related_report->reports->published_on : ''); ?></p>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-12">
                <!-- Pricing Start -->
                <section class="iq-pricing-host wow fadeInUp report-pricing" data-wow-duration="0.6s" id="ViewPlans">
                    <img src="images/others/shape1.png')}}" class="img-fluid shape-left" alt="QLOUD">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center iq-title-box iq-title-default iq-title-box-2">
                                    <div class="iq-title-icon">
                                    </div>
                                    <span class="iq-subtitle">Pricing</span>
                                    <h2 class="iq-title">Select a license type that suits your business needs</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="iq-price-container iq-price-table-6 text-center iq-box-shadow wow fadeInUp" data-wow-duration="0.6s">
                                    <div class="iq-price-header">
                                        <span class="iq-price-label">Single User Access</span>
                                        <h4 class="iq-price">US $<?php echo e(!empty($report_details->single_user_cost) ? $report_details->single_user_cost : ''); ?><span class="iq-price-desc"></span></h4>
                                        <p class="iq-price-description">Only <?php echo e(!empty($report_details->single_user_cost) ? ucwords(App\Helpers\Helpers\Helper::rupeesToWords($report_details->single_user_cost)) : ''); ?> US dollar</p>
                                    </div>
                                    <div class="iq-price-footer">
                                        <div class="iq-btn-container">
                                            <a href="<?php echo e(url('/purchase/'.$report_details->url.'/'.$report_details->id.'?license=single')); ?>" class="iq-button iq-btn-round d-inline" id="license_type_button_1" value="single"> Buy Now </a>
                                        </div>
                                    </div>
                                    <div class="iq-price-body">
                                        <ul class="iq-price-service">
                                            <li class="inactive">
                                                <span>1 User access</span>
                                                <i aria-hidden="true" class=""></i>
                                            </li>
                                            <li class="inactive">
                                                <span>15% Additional Free Customization</span>
                                                <i aria-hidden="true" class=""></i>
                                            </li>
                                            <li class="inactive">
                                                <span>Free Unlimited post-sale support</span>
                                                <i aria-hidden="true" class=""></i>
                                            </li>
                                            <li class="inactive">
                                                <span>100% Service Guarantee until achievement of ROI</span>
                                                <i aria-hidden="true" class=""></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="iq-price-container iq-price-table-6 text-center active iq-box-shadow wow fadeInUp" data-wow-duration="1.2s">
                                    <div class="iq-price-header">
                                        <span class="iq-price-label">Multi User Cost</span>
                                        <h4 class="iq-price">US $<?php echo e(!empty($report_details->multi_user_cost) ? $report_details->multi_user_cost : ''); ?></h4>
                                        <p class="iq-price-description">Only <?php echo e(!empty($report_details->multi_user_cost) ? ucwords(App\Helpers\Helpers\Helper::rupeesToWords($report_details->multi_user_cost)) : ''); ?> US dollar</p>
                                    </div>
                                    <div class="iq-price-footer">
                                        <div class="iq-btn-container">
                                            <a href="<?php echo e(url('/purchase/'.$report_details->url.'/'.$report_details->id.'?license=multi')); ?>" class="iq-button iq-btn-round d-inline" id="license_type_button_2" value="multi"> Buy Now </a>
                                        </div>
                                    </div>
                                    <div class="iq-price-body">
                                        <ul class="iq-price-service">
                                            <li class="inactive">
                                                <span>5 Users access</span>
                                                <i aria-hidden="true" class=""></i>
                                            </li>
                                            <li class="inactive">
                                                <span>25% Additional Free Customization</span>
                                                <i aria-hidden="true" class=""></i>
                                            </li>
                                            <li class="inactive">
                                                <span>Access Report summaries for Free</span>
                                                <i aria-hidden="true" class=""></i>
                                            </li>
                                            <li class="inactive">
                                                <span>Guaranteed service</span>
                                                <i aria-hidden="true" class=""></i>
                                            </li>
                                            <li class="inactive">
                                                <span>Dedicated Account Manager</span>
                                                <i aria-hidden="true" class=""></i>
                                            </li>
                                            <li class="inactive">
                                                <span>Discount of 20% on next purchase</span>
                                                <i aria-hidden="true" class=""></i>
                                            </li>
                                            <li class="inactive">
                                                <span>Get personalized market brief from Lead Author</span>
                                                <i aria-hidden="true" class=""></i>
                                            </li>
                                            <li class="inactive">
                                                <span>Printing of Report permitted</span>
                                                <i aria-hidden="true" class=""></i>
                                            </li>
                                            <li class="inactive">
                                                <span>Discount of 20% on next purchase</span>
                                                <i aria-hidden="true" class=""></i>
                                            </li>
                                            <li class="inactive">
                                                <span>100% Service Guarantee until achievement of ROI</span>
                                                <i aria-hidden="true" class=""></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="iq-price-container iq-price-table-6 text-center iq-box-shadow wow fadeInUp" data-wow-duration="1.8s">
                                    <div class="iq-price-header">
                                        <span class="iq-price-label">Enterprise User Cost</span>
                                        <h4 class="iq-price">US $<?php echo e(!empty($report_details->enterprise_user_cost) ? $report_details->enterprise_user_cost : ''); ?></h4>
                                        <p class="iq-price-description">Only <?php echo e(!empty($report_details->enterprise_user_cost) ? ucwords(App\Helpers\Helpers\Helper::rupeesToWords($report_details->enterprise_user_cost)) : ''); ?> US dollar</p>
                                    </div>
                                    <div class="iq-price-footer">
                                        <div class="iq-btn-container">
                                            <a href="<?php echo e(url('/purchase/'.$report_details->url.'/'.$report_details->id.'?license=enterprise')); ?>" class="iq-button iq-btn-round d-inline" id="license_type_button_3" value="enterprise"> Buy Now </a>
                                        </div>
                                    </div>
                                    <div class="iq-price-body">
                                        <ul class="iq-price-service">
                                            <li class="inactive">
                                                <span>Unlimited User Access</span>
                                                <i aria-hidden="true" class=""></i>
                                            </li>
                                            <li class="inactive">
                                                <span>30% Additional Free Customization</span>
                                                <i aria-hidden="true" class=""></i>
                                            </li>
                                            <li class="inactive">
                                                <span>Exclusive Previews to latest or upcoming reports</span>
                                                <i aria-hidden="true" class=""></i>
                                            </li>
                                            <li class="inactive">
                                                <span>Discount of 30% on next purchase</span>
                                                <i aria-hidden="true" class=""></i>
                                            </li>
                                            <li class="inactive">
                                                <span>100% Service Guarantee until achievement of ROI</span>
                                                <i aria-hidden="true" class=""></i>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Pricing End -->
            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<script type="text/javascript">
    $("#navbar").removeClass("nav-page");
    $("#navbar").addClass("banner-page-nav");
</script>

<script type="text/javascript">
    $(".home_active").removeClass("active");
    $(".reports_active").addClass("active");
    $(".reports-view-active").addClass("active");
</script>

<script type="text/javascript">
    $("#license_type_button").click(function() {
        var license_type = $('input[name="license"]:checked').val();
        var base_url = "<?php echo e(url('/purchase/'.$report_details->url.'/'.$report_details->id.'/?license=')); ?>" + license_type;
        $("#license_type_submit_form").attr("action", base_url);
        $("#license_type_submit_form").submit();
    })
</script>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });



    $('.ipad-carousel').owlCarousel({
        loop: true,
        margin: 5,
        nav: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
</script>

<script>
    let scrollable_height = document.getElementById('scrollable-div').clientHeight;
    // $("#scrollable-div").scroll(function(e) {
    //     console.log(screenTop());
    // })
    $(window).scroll(function(e) {
        var el = $('.sticky-form');
        var isPositionFixed = (el.css('position') == 'fixed');
        el.addClass('for-fixed');
        el.removeClass('for-static');
        if ($(this).scrollTop() >= (scrollable_height - 260)) {
            el.css({
                'position': 'absolute',
                'bottom': '0px',
                'top': 'unset',
                'width': '91.5%'
            })
            el.removeClass('for-fixed');
        } else if ($(this).scrollTop() > ($(".sticky-form").height() + $(".recent-reports").height())) {
            el.css({
                'position': 'fixed',
                'bottom': 'unset',
                'top': '120px',
                'width': 'unset'
            })
            el.addClass('for-fixed')
        } else {
            el.css({
                'position': 'static',
                'bottom': 'unset',
                'width': '100%'
            })
            el.removeClass('for-fixed');
            el.addClass('for-static');
        }
        let scrollBottom = $(document).height() - $(window).height() - $(this).scrollTop();
        // console.log(scrollBottom);
    });
</script>

<script>
    if (screen.width > 768) {
        var div_top = $('.nav-pills').offset().top;
        $(window).scroll(function() {
            var window_top = $(window).scrollTop();
            if (window_top > div_top && window_top < $('.report-pricing').offset().top) {
                if (!$('.nav-pills').is('.sticky')) {
                    $('.nav-pills').addClass('sticky');
                }
            } else {
                $('.nav-pills').removeClass('sticky');
            }
        });
    } else {
        $(window).scroll(function(e) {
            if ($(this).scrollTop() > ($("#main-header").height() + $(".main-bg").height() + $(".report-view-heading ").height() + $("#pills-tab").height())) {
                $("#toggle").css({
                    'display': 'block',
                })
            } else {
                $("#toggle").css({
                    'display': 'none',
                })
            }
        })
    }
</script>

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

<!-- <script>
    var div_top = $('.nav-pills').offset().top;
    $(window).scroll(function() {
        var window_top = $(window).scrollTop();
        if (window_top > div_top && window_top < $('.report-pricing').offset().top) {
            if (!$('.nav-pills').is('.sticky')) {
                $('.nav-pills').addClass('sticky');
            }
        } else {
            $('.nav-pills').removeClass('sticky');
        }
    });
</script> -->

<!-- toggle -->
<script>
    var theToggle = document.getElementById('toggle');

    // hasClass
    function hasClass(elem, className) {
        return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
    }
    // addClass
    function addClass(elem, className) {
        if (!hasClass(elem, className)) {
            elem.className += ' ' + className;
        }
    }
    // removeClass
    function removeClass(elem, className) {
        var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
        if (hasClass(elem, className)) {
            while (newClass.indexOf(' ' + className + ' ') >= 0) {
                newClass = newClass.replace(' ' + className + ' ', ' ');
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, '');
        }
    }
    // toggleClass
    function toggleClass(elem, className) {
        var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, " ") + ' ';
        if (hasClass(elem, className)) {
            while (newClass.indexOf(" " + className + " ") >= 0) {
                newClass = newClass.replace(" " + className + " ", " ");
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, '');
        } else {
            elem.className += ' ' + className;
        }
    }

    theToggle.onclick = function() {
        toggleClass(this, 'on');
        return false;
    }
</script>
<!-- toggle -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wemarketresearch/public_html/resources/views/front/reports-view.blade.php ENDPATH**/ ?>