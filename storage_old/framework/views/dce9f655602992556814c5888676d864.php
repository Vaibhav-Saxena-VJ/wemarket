<?php $__env->startSection('title',!empty($home->meta_title)?$home->meta_title:''); ?>

<?php $__env->startSection('meta_keywords',!empty($home->meta_keyword)?$home->meta_keyword:''); ?>

<?php $__env->startSection('meta_description', !empty($home->meta_description)?$home->meta_description:''); ?>
<?php $__env->startSection('head'); ?>
    <meta name='robots' content='index,follow, max-image-preview:large/' />

<?php echo !empty($home->schema_markup)?$home->schema_markup:''; ?>

<?php echo !empty($home->og_meta)?$home->og_meta:''; ?>

<?php echo !empty($home->twitter_meta)?$home->twitter_meta:''; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="amr-banner" style="background-image: url('./public/front/images/new-images/homepage/bg-2.png');">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pt-40">
                <!-- <div class="banner-btns">
                    <div class="read-more-btn wow fadeInUp" data-wow-duration="1s">
                        <a class="fancy" href="<?php echo e(url('/research-reports/all')); ?>">
                            <span class="text">View All Categories</span>
                        </a>
                    </div>
                </div> -->
                <div class="amr-banner-content wow fadeInLeft">
                    <h1>
                        <?php echo e(!empty($home->section_1_heading)?$home->section_1_heading:''); ?>

                    </h1>
                    <span class="banner-2nd-text for-tablet-div-hide">  <?php echo e(!empty($home->section_1_sub_heading)?$home->section_1_sub_heading:''); ?></span>

                    <p class="amr-banner-content_p for-tablet-div-hide">
                      <?php echo e(!empty($home->section_1_banner_content)?$home->section_1_banner_content:''); ?>

                    </p>

                    <div class="banner-counter iq-counter for-tablet-div-hide">
                        <div class="banner-count-content">
                            <p><span class="timer span-count" data-to="<?php echo e(!empty($home->section_1_respondents)?$home->section_1_respondents:''); ?>" data-speed="4000"><?php echo e(!empty($home->section_1_respondents)?$home->section_1_respondents:''); ?></span><span class="counter-symbol">+</span> Thousand</p>
                            <span>Reports</span>
                        </div>
                        <div class="banner-count-content">
                            <p><span class="timer span-count" data-to="<?php echo e(!empty($home->section_1_app_partners)?$home->section_1_app_partners:''); ?>" data-speed="4000"><?php echo e(!empty($home->section_1_app_partners)?$home->section_1_app_partners:''); ?></span></p>
                            <span>Clients</span>
                        </div>
                        <div class="banner-count-content">
                            <p><span class="timer span-count" data-to="<?php echo e(!empty($home->section_1_targeted_globally)?$home->section_1_targeted_globally:''); ?>" data-speed="4000"><?php echo e(!empty($home->section_1_targeted_globally)?$home->section_1_targeted_globally:''); ?></span><span class="counter-symbol">+</span> Countries</p>
                            <span>Targeted Globally</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Swiper -->
                <div class="swiper myBannerSwiper">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bannerData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <img src="<?php echo e(!empty($bannerData->image_path) && (Storage::exists($bannerData->image_path)) ?url('/').Storage::url($bannerData->image_path):''); ?>" alt="">
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12 for-tablet-div-show">
                <div class="amr-banner-content wow fadeInLeft">
                    <span class="banner-2nd-text"> <?php echo e(!empty($home->section_1_sub_heading)?$home->section_1_sub_heading:''); ?></span>

                    <p class="amr-banner-content_p">
                        <?php echo e(!empty($home->section_1_banner_content)?$home->section_1_banner_content:''); ?>

                    </p>

                    <div class="banner-counter iq-counter">
                        <div class="banner-count-content">
                            <p><span class="timer span-count" data-to="<?php echo e(!empty($home->section_1_respondents)?$home->section_1_respondents:''); ?>" data-speed="4000"><?php echo e(!empty($home->section_1_respondents)?$home->section_1_respondents:''); ?></span><span class="counter-symbol">+</span> thousand</p>
                            <span>Reports</span>
                        </div>
                        <div class="banner-count-content">
                            <p><span class="timer span-count" data-to="<?php echo e(!empty($home->section_1_app_partners)?$home->section_1_app_partners:''); ?>" data-speed="4000"><?php echo e(!empty($home->section_1_app_partners)?$home->section_1_app_partners:''); ?></span></p>
                            <span>Clients</span>
                        </div>
                        <div class="banner-count-content">
                            <p><span class="timer span-count" data-to="<?php echo e(!empty($home->section_1_targeted_globally)?$home->section_1_targeted_globally:''); ?>" data-speed="4000"><?php echo e(!empty($home->section_1_targeted_globally)?$home->section_1_targeted_globally:''); ?></span><span class="counter-symbol">+</span> Countries</p>
                            <span>Targeted Globally</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END REVOLUTION SLIDER -->


    <!-- reports slider -->
    <?php if(!empty($categories) && $categories->count() > 0): ?>
    <section class="gray-bg iq-pb-70 top-selling-reports">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center iq-title-box iq-title-default iq-title-box-2 wow fadeInUp">
                        <div class="iq-title-icon">
                        </div>
                        <h2 class="iq-title">Industries</h2>
                    </div>
                </div>
            </div>
            <div class="reports-content">
                <!-- Swiper -->
                <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="4" data-items-laptop="4" data-items-tab="3" data-items-mobile="2" data-items-mobile-sm="1" data-margin="30">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item wow fadeInLeft" data-wow-duration="1s">
                        <div class="iq-masonry-item creative design print-branding">
                            <a href="<?php echo e(url('/research-reports/'.Str::slug(Str::replace('&','and',$category->category_name) , '-').'/'.$category->id)); ?>" class="">
                                <div class="iq-portfolio reports-cards">
                                    <img src="<?php echo e(!empty($category->image_path) && Storage::exists($category->image_path) ? url('/').Storage::url($category->image_path) : URL::asset('admin_panel/commonarea/dist/img/default1.jpg')); ?>" class="w-100" alt="report-image">
                                    <div class="iq-portfolio-content">
                                        <div class="details-box clearfix">
                                            <div class="consult-details">
                                                <h5 class="link-color mt-1"><?php echo e(!empty($category->category_name) ? $category->category_name : ''); ?></h5>
                                                <div class="mb-0 iq-portfolio-desc"><?php echo !empty($category->description) ? $category->description : ''; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- reports slider End -->



<!-- Main-Content Start -->
<div class="main-content">
    <!-- Features Start -->
    <section>
        <div class="reaserch-para-section">
            <img src="<?php echo e(URL::asset('front/images/others/shape1.png')); ?>" class="img-fluid shape-right" alt="QLOUD">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-lg-0 mb-4 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                        <img src="<?php echo e(!empty($home->section_2_image_path) && (Storage::exists($home->section_2_image_path)) ? url('/').Storage::url($home->section_2_image_path):''); ?>" alt="<?php echo e(!empty($home->section_2_image_name)?$home->section_2_image_name:''); ?>">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                        <div class=" text-left iq-title-box iq-title-default iq-title-box-2">
                            <h2 class="iq-title text-dark"><?php echo e(!empty($home->section_2_heading)?$home->section_2_heading:''); ?></h2>
                             <?php echo !empty($home->section_2_description)?$home->section_2_description:''; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Start -->
    <section class="home-about grey-bg">
        <img src="<?php echo e(URL::asset('front/images/others/shape1.png')); ?>" class="img-fluid shape-right" alt="QLOUD">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInRight">
                    <div class=" text-left iq-title-box iq-title-default iq-title-box-2 home-about_content">
                        <span class="iq-subtitle">About Us</span>
                        <h2 class="iq-title text-capitalize">
                            <?php echo e(!empty($home->section_3_heading)?$home->section_3_heading:''); ?></h2>
                               <?php echo !empty($home->section_3_description)?$home->section_3_description:''; ?>

                    </div>
                    <div class="read-more-btn wow fadeInRight" data-wow-duration="1s">
                        <a class="fancy" href="<?php echo e(url('aboutus')); ?>">
                            <span class="text">Read More</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-lg-0 mb-4 wow fadeInLeft">
                    <img src="<?php echo e(!empty($home->section_3_image_path) && (Storage::exists($home->section_3_image_path)) ?url('/').Storage::url($home->section_3_image_path):''); ?>" class="img-fluid w-100 border-r5" alt="qloud">
                </div>
            </div>
        </div>
    </section>
    <!-- Top Selling Start -->
    <?php if(!empty($topSellingReports) && $topSellingReports->count() > 0): ?>
    <section class=" gray-bg iq-pb-70 top-selling-reports">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center iq-title-box iq-title-default iq-title-box-2 wow fadeInUp">
                        <div class="iq-title-icon">
                        </div>
                        <!-- <span class="iq-subtitle bg-white">Reports</span> -->
                        <h2 class="iq-title">Top Selling Products</h2>
                    </div>
                </div>
            </div>
            <div class="reports-content">
                <!-- Swiper -->
                <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="4" data-items-laptop="4" data-items-tab="3" data-items-mobile="2" data-items-mobile-sm="1" data-margin="30">
                    <?php $__currentLoopData = $topSellingReports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reportData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item wow fadeInLeft" data-wow-duration="1s">
                            <div class="iq-masonry-item creative design print-branding">
                                <a href="<?php echo e(url('/reports/'.$reportData->url.'/'.$reportData->id)); ?>" class="">
                                    <div class="iq-portfolio">
                                        
                                        <img src="<?php echo e(URL::asset('admin_panel/commonarea/dist/img/default1.jpg')); ?>" class="w-100" alt="report-image">
                                        <div class="iq-portfolio-content">
                                            <div class="details-box clearfix">
                                                <div class="consult-details">
                                                    <h5 class="link-color"><?php echo e(!empty($reportData->title)?$reportData->title:''); ?></h5>
                                                    <p class="mb-0 iq-portfolio-desc">
                                                    <?php echo e(substr(strip_tags(!empty($reportData->description)?$reportData->description:''), 0, 300) . '...'); ?>

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- Top Selling End -->


    <section class="home-why-with-us">
        <div class="why-with-us">

            <img src="<?php echo e(URL::asset('front/images/others/shape1.png')); ?>" class="img-fluid shape-right" alt="QLOUD">
            <div class="container bg-white">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center iq-title-box iq-title-default iq-title-box-2 wow fadeInUp">
                            <div class="iq-title-icon">
                            </div>
                            <h2 class="iq-title"><?php echo e(!empty($home->section_4_heading)?$home->section_4_heading:''); ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-lg-0 mb-4 wow fadeInLeft">
                        <div class="why-with-us_content iq-title-box iq-title-box-2 d-flex">
                            <div class="why-with-us_content_one">
                                <span class="why-with-us_content_heading"><?php echo e(!empty($home->section_4_title_1)?$home->section_4_title_1:''); ?></span>
                                <?php echo !empty($home->section_4_description_1)?$home->section_4_description_1:''; ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-lg-0 mb-4 wow fadeInUp text-center">
                        <img src="<?php echo e(!empty($home->section_4_image_1_path)?url('/').Storage::url($home->section_4_image_1_path):''); ?>" alt="<?php echo e(!empty($home->section_4_image_1_name)?$home->section_4_image_1_name:''); ?>">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-lg-0 mb-4 wow fadeInRight">
                        <div class="why-with-us_content iq-title-box iq-title-box-2 d-flex">
                            <div class="why-with-us_content_two ">
                                <span class="why-with-us_content_heading"><?php echo e(!empty($home->section_4_title_2)?$home->section_4_title_2:''); ?></span>
                                  <?php echo !empty($home->section_4_description_2)?$home->section_4_description_2:''; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4 col-md-4 mb-lg-0 mb-5 wow fadeInLeft">
                        <div class="why-with-us_content iq-title-box iq-title-box-2">
                            <div class="why-with-us_content_one">
                                <span class="why-with-us_content_heading"><?php echo e(!empty($home->section_4_title_3)?$home->section_4_title_3:''); ?></span>
                                 <p> <?php echo !empty($home->section_4_description_3)?$home->section_4_description_3:''; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 align-self-stretch align-self-center wow fadeInUp text-center">
                        <div class="why-with-us_right_video">
                              <img src="<?php echo e(!empty($home->section_4_image_2_path) && (Storage::exists($home->section_4_image_2_path)) ? url('/').Storage::url($home->section_4_image_2_path):''); ?>" alt="<?php echo e(!empty($home->section_4_image_2_name)?$home->section_4_image_2_name:''); ?>">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 mb-lg-0 mb-5 wow fadeInRight">
                        <div class="why-with-us_content iq-title-box iq-title-box-2">
                            <div class="why-with-us_content_two">
                                <span class="why-with-us_content_heading"><?php echo e(!empty($home->section_4_title_4)?$home->section_4_title_4:''); ?></span>
                                <p> <?php echo !empty($home->section_4_description_4)?$home->section_4_description_4:''; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo e(URL::asset('front/images/others/shape1.png')); ?>" class="img-fluid shape-left" alt="QLOUD">
        </div>
    </section>


    <section class="iq-counter-section iq-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-4 mb-lg-0 mb-5">
                    <div class="iq-title-box iq-title-default iq-title-box-2 mb-4">
                        <h2 class="iq-title"><?php echo e(isset($latestBlogs) && count($latestBlogs) > 0  ? 'Blogs' : ''); ?></h2>
                        <!--<h2 class="iq-title"><?php echo e(!empty($home->section_5_heading)?$home->section_5_heading:''); ?></h2>-->
                    </div>
                    <div class="media-content">
                        <?php $__currentLoopData = $latestBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(url('blog/'.(!empty($blogData->slug_url)?$blogData->slug_url:''))); ?>">
                                <div class="icon-box-content">
                                    <h5 class="icon-box-title mb-2"><?php echo e(substr(!empty($blogData->title)?$blogData->title:'',0,30)); ?></h5>
                                    <p class="mb-2"><?php echo e(substr(strip_tags(!empty($blogData->description)?$blogData->description:''),0,100).'....'); ?></p>
                                </div>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="col-lg-7 col-md-8">
                    <div class="HomeMediaSwiper">
                        <div class="swiper-wrapper">
                           <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                 <div class="swiper-heading">
                                       <?php if($blogData->type=='blogs'): ?>
                                        <a href="<?php echo e(url('blog')); ?>">
                                         Blogs
                                        </a>
                                       <?php endif; ?>

                                       <?php if($blogData->type=='press_release'): ?>
                                        <a href="<?php echo e(url('press-release')); ?>">
                                          Press Release
                                        </a>
                                       <?php endif; ?>
                                </div>
                                <div class="swiper-blogs">
                                    <div class="iq-blog-box" style="border: 1px solid #0071a1">
                                        <div class="iq-blog-image clearfix">
                                            
                                            <ul class="iq-blogtag">
                                                <?php
                                                $dateString = !empty($blogData->published_on)?$blogData->published_on:'';
                                                $timestamp = strtotime($dateString);
                                                $formattedDate = date('j F Y', $timestamp);
                                                ?>
                                                <li><a href="<?php echo e(url('blog/'.$blogData->slug_url)); ?>"><?php echo e($formattedDate); ?></a></li>
                                            </ul>

                                        </div>
                                        <div class="iq-blog-detail">
                                            <?php if(!empty($blogData->auther)): ?>
                                            <div class="iq-blog-meta">
                                                <ul class="iq-postdate">
                                                    <li class="list-inline-item">
                                                        <span class="publisher"><?php echo e(!empty($blogData->auther)?$blogData->auther:''); ?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <?php endif; ?>

                                            <div class="blog-title">
                                                <a href="<?php echo e(url('blog/'.$blogData->slug_url)); ?>">
                                                    <h5><?php echo e(!empty($blogData->title)?$blogData->title:''); ?></h5>
                                                </a>
                                            </div>
                                            <p><?php echo !empty($blogData->title)?$blogData->title:''; ?></p>
                                            <div class="blog-button">
                                                <a class="iq-btn-link" href="<?php echo e(url('blog/'.(!empty($blogData->slug_url)?$blogData->slug_url:'#'))); ?>">Read More<i class="ml-2 ion-ios-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="read-more-btn">
                                    <?php if($blogData->type=='blogs'): ?>
                                     <a class="fancy" href="<?php echo e(url('blog')); ?>">
                                        <span class="top-key"></span>
                                        <span class="text">View More</span>
                                        <span class="bottom-key-1"></span>
                                        <span class="bottom-key-2"></span>
                                     </a>
                                    <?php endif; ?>
                                     <?php if($blogData->type=='press_release'): ?>
                                     <a class="fancy" href="<?php echo e(url('press-release')); ?>">
                                        <span class="top-key"></span>
                                        <span class="text">View More</span>
                                        <span class="bottom-key-1"></span>
                                        <span class="bottom-key-2"></span>
                                     </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog End -->

    <section class="news-syndication gray-bg <?php echo e(isset($pressRelease) && count($pressRelease) > 0  ? '' : 'd-none'); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center iq-title-box iq-title-default iq-title-box-2">
                        <div class="iq-title-icon"></div>
                        <span class="iq-subtitle"><?php echo e(isset($pressRelease) && count($pressRelease) > 0  ? 'Media' : ''); ?></span>
                        <h2 class="iq-title"><?php echo e(isset($pressRelease) && count($pressRelease) > 0  ? 'News Syndication' : ''); ?> </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 align-self-center text-center">
                    <div class="iq-client iq-client-style-1  iq-has-grascale">
                        <div id="my-news-syndication-carousel" class="owl-carousel" data-dots="false" data-nav="false" data-items="3" data-items-laptop="4" data-items-tab="2" data-items-mobile="1" data-items-mobile-sm="1" data-autoplay="true" data-loop="true" data-margin="30">
                           <?php if(!empty($pressRelease)): ?>
                            <?php $__currentLoopData = $pressRelease; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pressReleaseData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <div class="item">
                                <div class="iq-masonry-item" style="border: 1px solid #0071a1">
                                    <div class="iq-portfolio">

                                        <a href="<?php echo e(url('press-release/'.(!empty($pressReleaseData->slug_url)?$pressReleaseData->slug_url:'#'))); ?>" class="iq-portfolio-img">
                                            
                                            <div class="portfolio-link">
                                                <div class="icon">
                                                    <i class="fa fa-link" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="iq-portfolio-content text-left">
                                            <div class="details-box clearfix">
                                                <div class="consult-details">
                                                    <a href="<?php echo e(url('press-release/'.(!empty($pressReleaseData->slug_url)?$pressReleaseData->slug_url:'#'))); ?>">
                                                        <?php
                                                            $dateString = !empty($pressReleaseData->published_on)? $pressReleaseData->published_on:'';
                                                            $timestamp = strtotime($dateString);
                                                            $formattedDate = date('j F Y', $timestamp);
                                                        ?>
                                                        <span>Published on:<?php echo e($formattedDate); ?></span>
                                                        <h5 class="link-color"><?php echo e(!empty($pressReleaseData->title)? $pressReleaseData->title:''); ?></h5>
                                                        <p class="mb-0 iq-portfolio-desc"> <?php echo !empty($pressReleaseData->title)? $pressReleaseData->title:''; ?></p>
                                                    </a>
                                                    <div class="iq-btn-container">
                                                        <a class="iq-button iq-btn-link has-icon btn-icon-right d-inline" href="<?php echo e(url('press-release/'.(!empty($pressReleaseData->slug_url)?$pressReleaseData->slug_url:'#'))); ?>">
                                                            Read More<i aria-hidden="true" class="ion ion-ios-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Start -->
    <section class="iq-testimonial-section we-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-12 align-self-center">
                    <div class=" text-left iq-title-box iq-title-default iq-title-box-2">
                        <div class="iq-title-icon">
                        </div>
                        <span class="iq-subtitle">Testimonials</span>
                        <h2 class="iq-title">
                            <?php echo e(!empty($home->section_6_heading)?$home->section_6_heading:''); ?></h2>

                        <p class="iq-title-desc">  <?php echo e(!empty($home->section_6_description)?$home->section_6_description:''); ?></p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-12 align-self-center">
                    <div class="iq-testimonial text-left iq-testimonial-1">
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
                            <?php if(!empty( $testimonials)): ?>
                            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <div class="item">
                                <div class="iq-testimonial-info">
                                    <div class="iq-testimonial-content">
                                        <div class="iq-testimonial-quote">
                                            <i aria-hidden="true" class="fa fa-quote-right"></i>
                                        </div>
                                        <p><?php echo e(!empty($testimonial->description)?$testimonial->description:''); ?></p>
                                        <div class="iq-testimonial-member">
                                            <div class="iq-testimonial-avtar">
                                                <img alt="image-testimonial" class="img-fluid center-block" src="<?php echo e(!empty($testimonial->image_path)?url('/').Storage::url($testimonial->image_path):''); ?>">
                                            </div>
                                            <div class="avtar-name">
                                                <div class="iq-lead"><?php echo e(!empty($testimonial->name)?$testimonial->name:''); ?></div>
                                                <span class="iq-post-meta"><?php echo e(!empty($testimonial->designation)?$testimonial->designation:''); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial End -->

    <section class="our-clients gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center iq-title-box iq-title-default iq-title-box-2">
                        <div class="iq-title-icon"></div>
                        <!-- <span class="iq-subtitle">Our Clients</span> -->
                        <h2 class="iq-title">All Our Great Clients</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 align-self-center">
                    <div class="iq-client iq-client-style-1  iq-has-grascale">
                        <div id="my-our-clients-carousel" class="owl-carousel" data-dots="false" data-nav="false" data-items="6" data-items-laptop="4" data-items-tab="4" data-items-mobile="3" data-items-mobile-sm="3" data-autoplay="true" data-loop="true" data-margin="30">

                            <?php if(!empty($logo)): ?>
                            <?php $__currentLoopData = $logo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logoData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item">
                                    <div class="iq-client-img">
                                        <img src="<?php echo e(!empty($logoData->image_path)?url('/').Storage::url($logoData->image_path):''); ?>" class="img-fluid" alt="client-img" />
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- Main-Content End -->

<?php if(!isset($_COOKIE['cookie_consent'])): ?>
    <div id="cookiePopup">
        <h4>Cookie Consent</h4>
        <p>Our website uses cookies to provide your browsing experience and relevant information. Before continuing to use our website, you agree &amp; accept our <a href="<?php echo e(url('privacy-policy')); ?>">Cookie Policy &amp; Privacy</a></p>
        <button type="submit" id="acceptCookie">Accept</button>
    </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script>
    $("#acceptCookie").click(function(){
        const d = new Date();
        d.setTime(d.getTime() + (1*24*60*60*1000));
        let expires = "expires="+ d.toUTCString();
        document.cookie = "cookie_consent = wemarketresearch.com;" + expires + ";path=/";
    })
</script>
<!-- Initialize Swiper -->

<!-- MEdia Swiper -->
<script>
    var swiper = new Swiper('.HomeMediaSwiper', {
        effect: 'coverflow',
        grabCursor: false,
        autoplay: true,
        centeredSlides: true,
        loop: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: -30,
            stretch: 0,
            depth: 100,
            modifier: 1,
            // slideShadows: true,
        },
    });
</script>
<!-- MEdia Swiper -->

<script>
    var swiper = new Swiper(".myBannerSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        speed: 2000,
        autoplay: {
            enabled: true,
            delay: 1,
        },
    });
</script>

<script>
    var swiper = new Swiper('.HomeMediaSwiper', {
    effect: 'coverflow',
    grabCursor: true,
    autoplay: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: -30,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wemarketresearch/public_html/resources/views/front/index.blade.php ENDPATH**/ ?>