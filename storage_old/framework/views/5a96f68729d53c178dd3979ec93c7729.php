<?php $__env->startSection('title','Blogs'); ?>
<?php $__env->startSection('head'); ?>
    <meta name='robots' content='index,follow, max-image-preview:large/' />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Breadcrumb Start -->
<div class=" main-bg">
    <div class="container-fluid p-0">
        <div class="text-left iq-breadcrumb-one iq-bg-over black blogs-banner    ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                            <h2 class="title">Blogs</h2>
                            <ol class="breadcrumb main-bg">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><i class="fa fa-home mr-2"></i>Home </a></li>
                                <li class="breadcrumb-item active">Blogs</li>
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
<section class="iq-blog-section ptb-20 amr-blogs">
    <div class="container">
        <?php if(count($blogs) > 0): ?>
        <div class="row">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 qloud-space-bottom ">
                <div class="iq-blog-box" style="border: 1px solid #0071a1">
                    <div class="iq-blog-image clearfix">
                        
                        <ul class="iq-blogtag">
                            <?php
                            $dateString = !empty($blog->published_on)?$blog->published_on:'';
                            $timestamp = strtotime($dateString);
                            $formattedDate = date('j F Y', $timestamp);
                            ?>
                            <li><a href="javascript:void(0)"><?php echo e($formattedDate); ?></a></li>
                        </ul>
                    </div>
                    <div class="iq-blog-detail">
                        <div class="iq-blog-meta">
                            <ul class="iq-postdate">
                                <li class="list-inline-item">
                                    <span class="publisher"><?php echo e(!empty($blog->auther)?$blog->auther:""); ?></span>
                                </li>
                            </ul>
                        </div>

                        <div class="blog-title">
                            <a href="<?php echo e(url('blog/'.(!empty($blog->slug_url)?$blog->slug_url:'#'))); ?>">
                                <h5 class="mb-3"><?php echo e(!empty($blog->title)?$blog->title:""); ?></h5>
                            </a>
                        </div>
                        <p class=""><?php echo e(substr(strip_tags(!empty($blog->description)?$blog->description:''), 0, 200) . '...'); ?></p>
                        <div class="blog-button">
                            <a class="iq-btn-link" href="<?php echo e(url('blog/'.(!empty($blog->slug_url)?$blog->slug_url:'#'))); ?>">Read More<i class="ml-2 ion-ios-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <div class="col-md-12">
                <div class="d-flex justify-content-center align-items-center w-100">
                    <img src="<?php echo e(URL::asset('admin_panel/commonarea/dist/img/no-record-found.png')); ?>" class="no-data-found-img" alt="" width="400">
                </div>
            </div>
            <?php endif; ?>
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
    $(".media_active").addClass("active");
    $(".blogs-active").addClass("active");
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wemarketresearch/public_html/resources/views/front/blogs.blade.php ENDPATH**/ ?>