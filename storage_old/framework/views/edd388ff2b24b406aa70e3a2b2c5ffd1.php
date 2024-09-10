<?php if(isset($category_details) && !empty($category_details)): ?>
    <?php $__env->startSection('title',!empty($category_details->meta_title) ? $category_details->meta_title : ''); ?>
    <?php $__env->startSection('meta_keywords',!empty($category_details->meta_keyword) ? $category_details->meta_keyword : ''); ?>
    <?php $__env->startSection('meta_description', !empty($category_details->meta_description) ? $category_details->meta_description : ''); ?>
<?php else: ?>
    <?php $__env->startSection('title','Reports'); ?>
<?php endif; ?>
<?php $__env->startSection('head'); ?>
<meta name='robots' content='index,follow, max-image-preview:large/' />
<?php echo !empty($category_details->schema_markup)?$category_details->schema_markup:''; ?>

<?php echo !empty($category_details->og_meta)?$category_details->og_meta:''; ?>

<?php echo !empty($category_details->twitter_meta)?$category_details->twitter_meta:''; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style>
    .reports-alert{
        padding: 8px 25px;
        margin-bottom: 0;
        color: #292564;
        background-color: #ecf2ff;
        border-color: #204de21f;
        box-shadow: 4.871px 34.659px 30px 0px rgba(0, 0, 0, 0.06);
    }

</style>
<!-- Breadcrumb Start -->
<div class=" main-bg">
    <div class="container-fluid p-0">
        <div class="text-left iq-breadcrumb-one iq-bg-over black reports-banner    ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                            <h2 class="title"><?php echo e((isset($category_details) && !empty($category_details)) ? $category_details->category_name : (isset($filter_text) ? $filter_text : 'All Reports')); ?></h2>
                            <ol class="breadcrumb main-bg">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><i class="fa fa-home mr-2"></i>Home</a></li>
                                <li class="breadcrumb-item active"><?php echo e(isset($category_details) && !empty($category_details) ? $category_details->category_name : (isset($filter_text) ? 'Searched Reports' : 'All Reports') ); ?></li>
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
<section class="light-gray-bg reports-page pt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 mb-lg-0 mb-5 wow fadeInUp text-center">
                <?php if(isset($category_details) && !empty($category_details)): ?>
                <div class="iq-icon-box iq-icon-box-style-5 bg-white iq-box-shadow border-bottom-box">
                    <div class="icon-box-img">
                        <img src="<?php echo e(!empty($category_details->image_path) && Storage::exists($category_details->image_path) ? url('/').Storage::url($category_details->image_path) : URL::asset('admin_panel/commonarea/dist/img/default1.jpg')); ?>" class="img-fluid w-100" alt="<?php echo e(!empty($category_details->image_name) ? $category_details->image_name : ''); ?>">
                    </div>
                    <div class="icon-box-content text-left">
                        <h4 class="icon-box-title"><?php echo e(!empty($category_details->heading) ? $category_details->heading : ''); ?></h4>
                        <div class="icon-box-desc"><?php echo !empty($category_details->description) ? $category_details->description : ''; ?></div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-12" id="scrollable-div">
                <div class="about-analytics wow fadeInLeft sticky-form for-static">
                    <h4 class="">CATEGORY</h4>
                    <div class="reports-page_list for-mobile-category-list-hide ">
                        <?php if(!empty($report_categories)): ?>
                            <a class="dropdown-item <?php echo e(!empty($category_details) ? '' : 'active'); ?>" href="<?php echo e(url('/research-reports/all')); ?>">All</a>
                            <?php $__currentLoopData = $report_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="dropdown-item <?php echo e((!empty($category_details) && $category_details->id == $category->id) ? 'active' : ''); ?>" href="<?php echo e(url('/research-reports/'.Str::slug(Str::replace('&','and',$category->category_name) , '-').'/'.$category->id)); ?>"><?php echo e(!empty($category->category_name) ? $category->category_name : ''); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="dropdown for-mobile-category-list-show">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Select Category
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php if(!empty($report_categories)): ?>
                            <a class="dropdown-item <?php echo e(!empty($category_details) ? '' : 'active'); ?>" href="<?php echo e(url('/research-reports/all')); ?>">All</a>
                            <?php $__currentLoopData = $report_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="dropdown-item <?php echo e((!empty($category_details) && $category_details->id == $category->id) ? 'active' : ''); ?>" href="<?php echo e(url('/research-reports/'.Str::slug(Str::replace('&','and',$category->category_name) , '-').'/'.$category->id)); ?>"><?php echo e(!empty($category->category_name) ? $category->category_name : ''); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>

            </div>

            <div class="col-lg-9 col-md-7 col-sm-12">
                <?php if($report_count > 0): ?>
                    <div class=" d-flex justify-content-between align-item-center pagination-page-count-div mb-4">
                        <div class="w-5 page-count">
                            <?php if(isset($report_per_page) && $report_count > $report_per_page): ?>
                            <select class="p-0" name="page_range" id="page_range">
                                <?php $__currentLoopData = config('constant.page_range'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page_range): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($page_range); ?>" <?php echo e((!empty($report_per_page) && $report_per_page == $page_range) ? 'selected' : ''); ?>> <?php echo e($page_range); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php $__currentLoopData = $all_reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="reports-lists mb-4 wow fadeInUp">
                        <div class="iq-icon-box iq-icon-box-style-5 bg-white iq-box-shadow">
                            <div class="icon-box-img">
                                
                                <img src="<?php echo e(URL::asset('admin_panel/commonarea/dist/img/default1.jpg')); ?>" class="w-100 report-view-img" alt="report-image">
                            </div>
                            <div class="icon-box-content">
                                <div class="reports-lists_content">
                                    <h4 class="icon-box-title">
                                        <a href="<?php echo e(url('/reports/'.$report->url.'/'.$report->id)); ?>"><?php echo e(!empty($report->title) ? $report->title : ''); ?></a>
                                    </h4>
                                    <p class="reports-desc"><?php echo !empty($report->description) ? substr(strip_tags($report->description), 0, 300) . '...' : ''; ?></p>
                                    <div class="report-footer">
                                        <div class="read-more-btn">
                                            <a class="fancy" href="<?php echo e(url('/reports/'.$report->url.'/'.$report->id)); ?>">
                                                <span class="top-key"></span>
                                                <span class="text">View</span>
                                                <span class="bottom-key-1"></span>
                                                <span class="bottom-key-2"></span>
                                            </a>
                                        </div>
                                        <div class="read-more-btn">
                                                <a class="fancy buy_now_report_btn" href="<?php echo e(url('/purchase/'.$report->url.'/'.$report->id.'?license=single')); ?>">
                                                    <span class="top-key"></span>
                                                    <span class="text">Buy Now</span>
                                                    <span class="bottom-key-1"></span>
                                                    <span class="bottom-key-2"></span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div class=" d-flex justify-content-between align-item-center pagination-page-count-div">
                        <div class="d-flex justify-content-left">
                            <?php if(!isset($filter_text)): ?>
                                <?php echo $all_reports->appends(['page_range' => !empty($report_per_page) ? $report_per_page : ''])->links(); ?>

                            <?php endif; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="no-record-found-div">
                        <div class="d-flex justify-content-center align-items-center">
                            <h6 class="reports-alert alert alert-danger">No Record Found !</h6>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if(isset($filter_text) && !empty($filter_text) && count($all_reports) == 0): ?>
                <div class="row">
                    <div class="col-lg-7 col-md-12 mt-lg-0">
                        <div class="no-report-form">
                            <div class=" text-left iq-title-default iq-title-box-2">
                                <div class="iq-title-icon">
                                </div>
                                <h2 class="iq-title mb-4">Contact With US </h2>
                            </div>
                            <div role="form" class="wpcf7" id="wpcf7-f790-p785-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form action="<?php echo e(route('contact.us.query')); ?>" method="post" class="wpcf7-form" id="contact-form" novalidate="novalidate">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="type" value="contact">
                                    <div class=row>
                                        <div class="col-lg-6 col-md-6">
                                            <span class="wpcf7-form-control-wrap first-name"><input type="text" name="fname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="First Name" /></span>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <span class="wpcf7-form-control-wrap last-name"><input type="text" name="lname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Last Name" /></span>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email Address" /></span>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="wpcf7-form-control-wrap tel-554"><input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" placeholder="Phone" /></span>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="wpcf7-form-control-wrap company"><input type="text" name="company" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Enter Company" /></span>
                                        </div>
                                        <div class="col-lg-12">
                                            <p> <span class="wpcf7-form-control-wrap your-message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea></span>
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset class="MainCaptchaDiv">
                                                <span id="WrongCaptchaError" class="error"></span>
                                                <span class="text-success" id="SuccessMessage" class="error"></span>
                                                <div class="CaptchaDiv">
                                                    <div class='CaptchaWrap'>
                                                        <div id="CaptchaImageCode" class="CaptchaTxtField">
                                                            <canvas id="CapCode" class="capcode" width="100" height="60px"></canvas>
                                                        </div>
                                                    </div>
                                                    <div class="ReloadBtn" onclick='CreateCaptcha();' title="Reload Image">
                                                        <img src="<?php echo e(URL::asset('front/images/new-images/reports/recycle.png')); ?>" alt="" class="regenerate-img" >
                                                    </div>
                                                <div class="d-flex-div">
                                                    <label for="">
                                                    <input type="text" id="UserCaptchaCode" class="CaptchaTxtField input" placeholder='Enter Captcha'>
                                                    </label>
                                                </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="button" value="Send" class="wpcf7-form-control wpcf7-submit form-submit-btn" onclick="CheckCaptcha();">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="no-report-right">
                            <h4>We have the sample that you are looking for. Please Enter your details, Our Sales team will get back to you Immediately</h4>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
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
    $('#page_range').change(function() {
        var limit = $(this).val();
        var link = window.location.pathname;
        var redirectLink = link + '?page_range=' + limit;
        window.location = redirectLink;
    });
</script>

<script type="text/javascript">
    $(".buy_now_report_btn").each(function() {
        $(this).click(function() {
            $(this).parent("#buy_now_report_form").submit();
        })
    })
</script>

<script type="text/javascript">
    $(document).ready(function(){
        var filter_text = "<?php echo e(isset($filter_text) && !empty($filter_text) ? $filter_text : ''); ?>";
        $("#filter_input").val(filter_text);
    })
</script>

<!-- <script type="text/javascript">
    $("#filter_input").on('keypress',function(e) {
        if(e.which == 13) {
            e.preventDefault();
            var url = "<?php echo e(url('/searchresults/?filter=')); ?>" + $(this).val();
            $("#filter_input_form").attr("action", url);
            $("#filter_input_form").submit();
        }
    });
</script> -->

<script>
    var cd;

  $(function(){
    CreateCaptcha();
  });

  // Create Captcha
  function CreateCaptcha() {
    //$('#InvalidCapthcaError').hide();
    var alpha = new Array('0','1', '2', '3', '4', '5', '6', '7', '8', '9');
    var i;
    for (i = 0; i < 4; i++) {
      var a = alpha[Math.floor(Math.random() * alpha.length)];
      var b = alpha[Math.floor(Math.random() * alpha.length)];
      var c = alpha[Math.floor(Math.random() * alpha.length)];
      var d = alpha[Math.floor(Math.random() * alpha.length)];
    //   var e = alpha[Math.floor(Math.random() * alpha.length)];
    //   var f = alpha[Math.floor(Math.random() * alpha.length)];
    }
    cd = a + ' ' + b + ' ' + c + ' ' + d;
    $('#CaptchaImageCode').empty().append('<canvas id="CapCode" class="capcode" width="300" height="80"></canvas>')

    var c = document.getElementById("CapCode"),
        ctx=c.getContext("2d"),
        x = c.width / 2,
        img = new Image();

    img.src = "<?php echo e(asset('front/images/white-curved.jpg')); ?>";
    img.onload = function () {
        var pattern = ctx.createPattern(img, "repeat");
        ctx.globalAlpha = "0.7";
        ctx.fillStyle = pattern;
        ctx.fillRect(0, 0, c.width, c.height);
        ctx.font="52px Roboto";
        ctx.fillStyle = 'White';
        ctx.textAlign = 'center';
        ctx.setTransform (1, -0.12, 0, 1, 0, 15);
        ctx.fillText(cd,x,55);
    };

  }

  //
  function roundRect(ctx, x, y, width, height, radius, fill, stroke) {
    if (typeof stroke === 'undefined') {
      stroke = true;
    }
    if (typeof radius === 'undefined') {
      radius = 5;
    }
    if (typeof radius === 'number') {
      radius = {tl: radius, tr: radius, br: radius, bl: radius};
    } else {
      var defaultRadius = {tl: 0, tr: 0, br: 0, bl: 0};
      for (var side in defaultRadius) {
        radius[side] = radius[side] || defaultRadius[side];
      }
    }
    ctx.beginPath();
    ctx.moveTo(x + radius.tl, y);
    ctx.lineTo(x + width - radius.tr, y);
    ctx.quadraticCurveTo(x + width, y, x + width, y + radius.tr);
    ctx.lineTo(x + width, y + height - radius.br);
    ctx.quadraticCurveTo(x + width, y + height, x + width - radius.br, y + height);
    ctx.lineTo(x + radius.bl, y + height);
    ctx.quadraticCurveTo(x, y + height, x, y + height - radius.bl);
    ctx.lineTo(x, y + radius.tl);
    ctx.quadraticCurveTo(x, y, x + radius.tl, y);
    ctx.closePath();
    if (fill) {
      ctx.fill();
    }
    if (stroke) {
      ctx.stroke();
    }

  }

  // Validate Captcha
  function ValidateCaptcha() {
    var string1 = removeSpaces(cd);
    var string2 = removeSpaces($('#UserCaptchaCode').val());
    if (string1 == string2) {
      return true;
    }
    else {
      return false;
    }
  }

  // Remove Spaces
  function removeSpaces(string) {
    return string.split(' ').join('');
  }

  // Check Captcha
  function CheckCaptcha() {
  var result = ValidateCaptcha();
  if( $("#UserCaptchaCode").val() == "" || $("#UserCaptchaCode").val() == null || $("#UserCaptchaCode").val() == "undefined") {
    $('#WrongCaptchaError').text('Please enter code given below in a picture.').show();
    $('#UserCaptchaCode').focus();
  } else {
    if(result == false) {
      $('#WrongCaptchaError').text('Invalid Captcha! Please try again.').show();
      CreateCaptcha();
      $('#UserCaptchaCode').focus().select();
    }
    else {
      $('#UserCaptchaCode').val('').attr('place-holder','Enter Captcha - Case Sensitive');
      CreateCaptcha();
      $('#WrongCaptchaError').fadeOut(100);
      $('#SuccessMessage').text('Capcha Mached, Please Wait...').show();
      $('#SuccessMessage').fadeIn(100).css('display','block').delay(10000).fadeOut(250);
      $("#contact-form").submit();
    }
  }
  }
</script>


<script>
    let scrollable_height = document.getElementById('scrollable-div').clientHeight;
    $("#scrollable-div").scroll(function(e) {
        console.log(screenTop());
    })
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
                'top': '100px',
                'width': 'unset',

    'height': 'auto',
    'border-radius': '0'
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wemarketresearch/public_html/resources/views/front/reports.blade.php ENDPATH**/ ?>