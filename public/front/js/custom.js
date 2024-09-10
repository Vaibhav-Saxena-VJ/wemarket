(function(n){"use strict";n(document).ready(function(){n(window).on("load",function(){function r(){var t=n("#main-header").height();n(".iq-height").css("height",t+"px")}
var t,i,u;n("#load").fadeOut();n("#loading").delay(0).fadeOut("slow");$(".navbar-nav li a").on("click",function(n){var t=$(this);$("html, body").stop().animate({scrollTop:$(t.attr("href")).offset().top-0},1500);n.preventDefault()});n(function(){var t=n("#main-header"),i=0,u=80;r();n(window).resize(r);n(window).on("scroll",function(){i=n(window).scrollTop();i>=u?t.addClass("menu-sticky animated slideInDown"):t.removeClass("menu-sticky animated slideInDown")})});$(".navbar-nav li a").on("click",function(){$(".navbar-nav li a.active").removeClass("active");$(this).addClass("active")});n("#back-to-top").fadeOut();n(window).on("scroll",function(){n(this).scrollTop()>250?n("#back-to-top").fadeIn(1400):n("#back-to-top").fadeOut(400)});n("#top").on("click",function(){return(n("top").tooltip("hide"),n("body,html").animate({scrollTop:0},800),!1)});$(".nav-item.dropdown").mouseenter(function(){$(this).addClass("menu-show")});$(".nav-item.dropdown").mouseleave(function(){$(this).removeClass("menu-show")});n(document).ready(function(){n(".menu-btn").click(function(){n(this).toggleClass("is-active")})});n(".timer").countTo();n(".isotope").isotope({itemSelector:".iq-grid-item"});n(".isotope-filters").on("click","button",function(){var t=n(this).attr("data-filter");n(".isotope").isotope({resizable:!0,filter:t});n(".isotope-filters button").removeClass("show active");n(this).addClass("show active")});if(((t=n(".iq-masonry-block .iq-masonry")),t)){i=n(".iq-masonry-block .isotope-filters");t.isotope({percentPosition:!0,resizable:!0,itemSelector:".iq-masonry-block .iq-masonry-item",masonry:{gutterWidth:0},});i.on("click","button",function(){var i=n(this).attr("data-filter");t.isotope({filter:i})});i.each(function(t,i){var r=n(i);r.on("click","button",function(){r.find(".active").removeClass("active");n(this).addClass("active")})})}
n(".effect-box .effect-btn").click(function(){n(this).parent().toggleClass("main")});n(".iq-progress-bar > span").each(function(){var t=n(this),i=n(this).data("percent");t.css({transition:"width 2s"});setTimeout(function(){t.appear(function(){t.css("width",i+"%")})},500)});ToxProgress.create();ToxProgress.animate();n(".iq-accordion .iq-accordion-block .iq-accordion-details").hide();n(".iq-accordion .iq-accordion-block:first").addClass("iq-active").children().slideDown("slow");n(".iq-accordion .iq-accordion-block").on("click",function(){n(this).children("div.iq-accordion-details").is(":hidden")&&(n(".iq-accordion .iq-accordion-block").removeClass("iq-active").children("div.iq-accordion-details").slideUp("slow"),n(this).toggleClass("iq-active").children("div.iq-accordion-details").slideDown("slow"))});n(".popup-gallery").magnificPopup({delegate:"a.popup-img",type:"image",tLoading:"Loading image #%curr%...",mainClass:"mfp-img-mobile",gallery:{enabled:!0,navigateByImgClick:!0,preload:[0,1],},image:{tError:'<a href="%url%">The image #%curr%</a> could not be loaded.',titleSrc:function(n){return(n.el.attr("title")+"<small>by Marsel Van Oosten</small>")},},});n(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({disableOn:700,type:"iframe",mainClass:"mfp-fade",removalDelay:160,preloader:!1,fixedContentPos:!1,});n(".owl-carousel").each(function(){var t=n(this);t.owlCarousel({items:t.data("items"),loop:t.data("loop"),margin:t.data("margin"),stagePadding:t.data("padding"),nav:t.data("nav"),dots:t.data("dots"),autoplay:t.data("autoplay"),autoplayTimeout:t.data("autoplay-timeout"),navText:["<i class='fa fa-angle-left fa-2x'></i>","<i class='fa fa-angle-right fa-2x'></i>",],responsiveClass:!0,responsive:{0:{items:t.data("items-mobile-sm"),nav:!1,dots:!0,},480:{items:t.data("items-mobile"),nav:!1,dots:!0,},768:{items:t.data("items-tab")},1023:{items:t.data("items-laptop")},1199:{items:t.data("items")},},})});u=new WOW({boxClass:"wow",animateClass:"animated",offset:0,mobile:!1,live:!0,});u.init();n(".slider.slider-nav").on("swipe",function(){});n(".slider.slider-nav").on("afterChange",function(){n(".slick-current").prev().addClass("near-item");n(".slick-current").next().addClass("near-item")});n(".slider.slider-nav").on("beforeChange",function(){n(".slick-current").prev().removeClass("near-item");n(".slick-current").next().removeClass("near-item")});n(".slider.slider-for").slick({slidesToShow:1,slidesToScroll:1,arrows:!1,fade:!0,centerMode:!0,focusOnSelect:!0,asNavFor:".slider-nav",});n(".slider-nav").slick({slidesToShow:5,slidesToScroll:1,centerPadding:"60",asNavFor:".slider-for",dots:!1,arrows:!0,centerMode:!0,focusOnSelect:!0,responsive:[{breakpoint:992,settings:{arrows:!1,centerMode:!0,centerPadding:"30",slidesToShow:3,},},{breakpoint:767,settings:{arrows:!1,centerMode:!0,centerPadding:"15",slidesToShow:1,},},],});n(".slick-current").prev().addClass("near-item");n(".slick-current").next().addClass("near-item")})})})(jQuery);$("#cookiePopup button").click(function(){$("#cookiePopup").fadeOut()})