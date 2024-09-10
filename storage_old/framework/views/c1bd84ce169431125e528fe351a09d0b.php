<?php $__env->startSection('title','Infographics'); ?>
<?php $__env->startSection('head'); ?>
    <meta name='robots' content='index,follow, max-image-preview:large/' />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<style>
.infographics
{
    /* width: inherit !important; */
    margin:auto;
}
</style>

<!-- Breadcrumb Start -->
<div class=" main-bg">
    <div class="container-fluid p-0">
        <div class="text-left iq-breadcrumb-one iq-bg-over black infographics-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                            <h2 class="title">Infographics</h2>
                            <ol class="breadcrumb main-bg">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><i class="fa fa-home mr-2"></i>Home </a></li>
                                <li class="breadcrumb-item active">Infographics</li>
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
<div class="iq-blog-section overview-block-ptb infographics ptb-70">
    <div class="container">
        <div class="row">
            <hr style="margin: 10px 0 30px 0">
            <div class="row infographics">
                <?php if(count($infographics) > 0): ?>
                    <?php $__currentLoopData = $infographics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $infoData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <a href="<?php echo e(url('infographics-details/'.(!empty($infoData->id)?$infoData->id:''))); ?>">
                                <img src="<?php echo e(!empty($infoData->image_path) && Storage::exists($infoData->image_path) ? url('/').Storage::url($infoData->image_path) : URL::asset('admin_panel/commonarea/dist/img/default1.jpg')); ?>" alt="<?php echo e(!empty($infoData->image_name)?$infoData->image_name:''); ?>">
                                <div class="content">
                                    <p class="title"><?php echo e(!empty($infoData->title)?$infoData->title:''); ?></p>
                                    <p class="title title-2">Read More</p>
                                </div>
                            </a>
                        </div>
                    </div> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-12 mt-4">
                        <?php echo e($infographics->links()); ?>

                    </div>
                <?php else: ?>
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center align-items-center w-100">
                            <img src="<?php echo e(URL::asset('admin_panel/commonarea/dist/img/no-record-found.png')); ?>" class="no-data-found-img" alt="" width="400">
                        </div>
                    </div>
                <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<script type="text/javascript">
    $("#navbar").removeClass("nav-page");
    $("#navbar").addClass("banner-page-nav");
</script>
<script type="text/javascript">
    $(".home_active").removeClass("active");
    $(".media_active").addClass("active");
    $(".infographics-active").addClass("active");
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wemarketresearch/public_html/resources/views/front/infographics.blade.php ENDPATH**/ ?>