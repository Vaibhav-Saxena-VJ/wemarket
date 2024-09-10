<?php $__env->startSection('title','Careers'); ?>
<?php $__env->startSection('head'); ?>
    <meta name='robots' content='index,follow, max-image-preview:large/' />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('front.layout.notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
    .MainCaptchaDiv #UserCaptchaCode:hover,  .MainCaptchaDiv #UserCaptchaCode:focus{
        border: 1px solid transparent !important;
    }
    .career_form_field.MainCaptchaDiv{
        flex-direction: column;
    }
    .career_form_btn{
        margin-left: 0;
    }
    input,
    input[type=text],
    input[type=email],
    input[type=search],
    input[type=password],
    textarea{
        color: white !important;
    }
</style>

<!-- Breadcrumb Start -->
<div class=" main-bg">
    <div class="container-fluid p-0">
        <div class="text-left iq-breadcrumb-one iq-bg-over black careers-banner    ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                            <h2 class="title">Careers</h2>
                            <ol class="breadcrumb main-bg">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><i class="fa fa-home mr-2"></i>Home </a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(url('aboutus')); ?>">About Us </a></li>
                                <li class="breadcrumb-item active">Careers</li>
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
<section class="careers">
    <img src="<?php echo e(URL::asset('front/images/others/shape1.png')); ?>" class="img-fluid shape-left" alt="QLOUD">
    <img src="<?php echo e(URL::asset('front/images/others/shape1.png')); ?>" class="img-fluid shape-right" alt="1">
    <div class="container">
        <div class="careers_content bg-white">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="text-center iq-title-box iq-title-default iq-title-box-2 wow fadeInUp" data-wow-duration="0.6s" style="visibility: visible; animation-duration: 0.6s; animation-name: fadeInUp;">
                         <h2 class="iq-title"><?php echo e(!empty($career->heading)?$career->heading:''); ?></h2>
                    </div>
                    <div class="iq-icon-box iq-icon-box-style-5 bg-white iq-box-shadow wow fadeInUp" data-wow-duration="0.7s" style="visibility: visible; animation-duration: 0.6s; animation-name: fadeInUp;">
                        <div class="icon-box-content">
                            <?php echo !empty($career->description)?$career->description:''; ?>

                        </div>
                    </div>
                </div>

                <?php $__currentLoopData = $openings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opening_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 mb-150 wow fadeInLeft" data-wow-duration="0.6s" style="visibility: visible; animation-duration: 0.6s; animation-name: fadeInLeft;">
                        <div class="career_card career_work ">
                            <div class="career_img-section">
                                <img src="<?php echo e(URL::asset('front/images/new-images/career/join-us.png')); ?>" class="cr_img" alt="vacancy">
                            </div>
                            <div class="career_card-desc">
                                <div class="career_card-time"><?php echo e(!empty($opening_data->heading)?$opening_data->heading:''); ?></div>
                                <div class="career_location">
                                    <p class="career_recent"><i class="fa fa-suitcase"></i><?php echo e(!empty($opening_data->number_of_positions)?$opening_data->number_of_positions:''); ?></p>
                                    <p class="career_recent"><i class="fa fa-clock-o"></i><?php echo e(!empty($opening_data->experience)?$opening_data->experience:''); ?></p>
                                    <p class="career_recent"><i class="fa fa fa-map-marker"></i><?php echo e(!empty($opening_data->location)?$opening_data->location:''); ?></p>
                                </div>
                                <div class="career_btn">
                                    <button id="apply-now-btn" class="custom-btn btn-2 openings" data-title="<?php echo e(!empty($opening_data->heading)?$opening_data->heading:''); ?>"  data-id="<?php echo e(!empty($opening_data->id)?$opening_data->id:''); ?>">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<!-- Iconbox End -->

<!-- Career Form Modal -->
<div class="modal fade career-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="career-modal-header">
                    <div class="career_form_title"><span class="modal-job-title"></span></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="form">
                    <div class="career_form_card">
                         <form action="<?php echo e(route('career.application.store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="application_for" id="application_for_input" value="">
                            <div class="career_form_field">
                                <i aria-hidden="true" class="ion ion-ios-person"></i>
                                <input placeholder="Full Name" class="career_form_input-field" type="text" name="name" value="<?php echo e(old('name')); ?>">
                            </div>
                            <div class="career_form_field">
                                <i aria-hidden="true" class="ion ion-ios-email"></i>
                                <input placeholder="Email" class="career_form_input-field" type="mail" name="email" value="<?php echo e(old('email')); ?>">
                            </div>
                            <div class="career_form_field">
                                <i aria-hidden="true" class="ion ion-ios-telephone"></i>
                                <input placeholder="Phone No." class="career_form_input-field" type="text" name="phone" value="<?php echo e(old('phone')); ?>">
                            </div>
                            <div class="career_form_field">
                                <i aria-hidden="true" class="ion ion-ios-email"></i>
                                <input placeholder="Designation" class="career_form_input-field" type="text" name="designation" value="<?php echo e(old('namdesignatione')); ?>">
                            </div>
                            <div class="career_form_field for-textarea">
                                <i aria-hidden="true" class="ion ion-document-text"></i>
                                <span class="wpcf7-form-control-wrap your-message"><textarea name="message" cols="46" rows="12" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"><?php echo e(old('message')); ?></textarea></span>
                            </div>

                            <div class="career_form_field">
                                <input type="file" class="form-control upload-file" aria-label="file example" name="file_path">
                            </div>

                            <div class="col-lg-12 my-2">
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
                                            <img src="<?php echo e(URL::asset('front/images/new-images/reports/recycle.png')); ?>" alt="" class="regenerate-img" >
                                        </div>
                                        <div class="d-flex-div career_form_field">
                                            <label for="">
                                                <input id="captcha" type="text" class="career_form_input-field" placeholder="Enter Captcha" name="captcha">
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <button type="submit" class="btn career_form_btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Career Form Modal -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    $("#navbar").removeClass("nav-page");
    $("#navbar").addClass("banner-page-nav");
</script>
<script type="text/javascript">
    $(".home_active").removeClass("active");
    $(".about_active").addClass("active");
    $(".careers-active").addClass("active");
</script>

<script>
   $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: '<?php echo e(url("/reload-captcha")); ?>',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>

<script>
    $(".openings").each(function(){
        $(this).click(function(){
            $(".career_form_title").html("Apply - "+$(this).attr("data-title"));
            $("#application_for_input").val($(this).attr("data-title"));
            $("#exampleModal").modal("show");
        })
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wemarketresearch/public_html/resources/views/front/careers.blade.php ENDPATH**/ ?>