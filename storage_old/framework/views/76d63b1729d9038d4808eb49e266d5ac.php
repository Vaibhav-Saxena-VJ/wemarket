<?php $__env->startSection('title',!empty($privacy->meta_title)?$privacy->meta_title:''); ?>

<?php $__env->startSection('meta_keywords',!empty($privacy->meta_keyword)?$privacy->meta_keyword:''); ?>

<?php $__env->startSection('meta_description', !empty($privacy->meta_description)?$privacy->meta_description:''); ?>
<?php $__env->startSection('head'); ?>
<meta name='robots' content='index,follow, max-image-preview:large/' />
<?php echo !empty($privacy->schema_markup)?$privacy->schema_markup:''; ?>

<?php echo !empty($privacy->og_meta)?$privacy->og_meta:''; ?>

<?php echo !empty($privacy->twitter_meta)?$privacy->twitter_meta:''; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Breadcrumb Start -->
<div class=" main-bg">
    <div class="container-fluid p-0">
        <div class="text-left iq-breadcrumb-one iq-bg-over black privacy-policy-banner    ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                            <h2 class="title"><?php echo e(!empty($privacy->heading)?$privacy->heading:""); ?></h2>
                            <ol class="breadcrumb main-bg">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><i class="fa fa-home mr-2"></i>Home </a></li>
                                <li class="breadcrumb-item active">Privacy Policy</li>
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
<section class="terms-of-use-page">
    <img src="images/others/shape1.png" class="img-fluid shape-left" alt="QLOUD">
    <img src="images/others/shape1.png" class="img-fluid shape-right" alt="1">
    <div class="container">
        <div class="terms-of-use-page_content bg-white">
           <?php echo !empty($privacy->description)?$privacy->description:""; ?>

        </div>
    </div>
</section>
<!-- Iconbox End -->


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<script type="text/javascript">
    $("#navbar").removeClass("nav-page");
    $("#navbar").addClass("banner-page-nav");
</script>
<script type="text/javascript">
    $(".home_active").removeClass("active");
    $(".terms_of_use_active").addClass("active");
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wemarketresearch/public_html/resources/views/front/privacy-policy.blade.php ENDPATH**/ ?>