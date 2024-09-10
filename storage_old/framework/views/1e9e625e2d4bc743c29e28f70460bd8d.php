<?php $__env->startSection('title',!empty($service->meta_title)?$service->meta_title:''); ?>

<?php $__env->startSection('meta_keywords',!empty($service->meta_keyword)?$service->meta_keyword:''); ?>

<?php $__env->startSection('meta_description', !empty($service->meta_description)?$service->meta_description:''); ?>
<?php $__env->startSection('head'); ?>
<meta name='robots' content='index,follow, max-image-preview:large/' />
<?php echo !empty($service->schema_markup)?$service->schema_markup:''; ?>

<?php echo !empty($service->og_meta)?$service->og_meta:''; ?>

<?php echo !empty($service->twitter_meta)?$service->twitter_meta:''; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Breadcrumb Start -->
<div class=" main-bg">
    <div class="container-fluid pt-2">
        <div class="text-left iq-breadcrumb-one iq-bg-over black service-view-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                            <h2 class="title"><?php echo e(!empty($service->banner_heading)?$service->banner_heading:''); ?></h2>
                            <ol class="breadcrumb main-bg">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><i class="fa fa-home mr-2"></i>Home </a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(url('services')); ?>">Services </a></li>
                                <li class="breadcrumb-item active"><?php echo e(!empty($service->banner_heading)?$service->banner_heading:''); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- Blog Start -->
<section class="pt-0">
    <div class="iq-blog-section service-view">
        <div class="service-view-img">
            <img src="<?php echo e(!empty($service->banner_image_path) && Storage::exists($service->banner_image_path) ? url('/').Storage::url($service->banner_image_path):''); ?>" class="img-fluid w-100 service-view-img" alt="Forbes">
        </div>
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-lg-12 col-sm-12 mb-lg-0 mb-5  bg-white service-view-div">
                    <div class="content-card">
                        <div class="service-view-content">
                               <?php echo !empty($service->description)?$service->description :''; ?>

                        </div>
                    </div>
                </div>
            </div><!-- #row -->
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
    $(".services_active").addClass("active");
    $(".custom-research-active").addClass("active");
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wemarketresearch/public_html/resources/views/front/custom-research-services.blade.php ENDPATH**/ ?>