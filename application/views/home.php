<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>eddress - An address system for the digital age</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Turn your address into a six characters code ABC-123, that’s an eddress. Download our app to create your eddress. Available on App store and Google play.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" name="viewport" />
    <meta name="google-site-verification" content="3-GZsoil4O4YBiTvR6iQOIPNe4RypyUuwRGAj1z08SI" />

    <meta property="og:title" content="Address System | eddress">
    <meta property="og:image" content="http://www.eddress.co/images/eddressfblogo.png">
    <meta property="og:description" content="Turn your address into a six characters code ABC-123, that's an eddress. Download our app to create your eddress. Available on App store and Google play.">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.png" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/map/map.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/templatemo_misc.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/templatemo_style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/colorbox.css" />

    <script src="<?php echo base_url() ?>js/vendor/jquery-1.11.0.min.js"></script>
    <script src="<?php echo base_url() ?>js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/fastclick.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/jssor.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/jssor.slider.js"></script>
    <script src="<?php echo base_url() ?>js/jquery.colorbox.js"></script>


    <script>
        $(document).ready(function(){
            $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
            $(".callbacks").colorbox({
                onOpen:function(){ alert('onOpen: colorbox is about to open'); },
                onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
                onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
                onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
                onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
            });

            $('.non-retina').colorbox({rel:'group5', transition:'none'})
            $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});

            //Example of preserving a JavaScript event for inline calls.
            $("#click").click(function(){
                $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                return false;
            });
        });
    </script>


    <script type="text/javascript">

        $(document).ready(function() {

            jQuery('body').bind('click', function(e) {
                if(jQuery(e.target).closest('.navbar').length == 0) {
                    // click happened outside of .navbar, so hide
                    var opened = jQuery('.navbar-collapse').hasClass('collapse in');
                    if ( opened === true ) {
                        jQuery('.navbar-collapse').collapse('hide');
                    }
                }
            });

        });

        $(function ()
        {
            FastClick.attach(document.body);

            $('#store_btn').click(function() {
                $('#storebox').show();
            });

            $('#storebox_closebtn').click(function() {
                $('#storebox').hide();
            });
        });
    </script>


    <script>

        jQuery(document).ready(function ($) {

            var _CaptionTransitions = [];
            _CaptionTransitions["L"] = { $Duration: 800, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };


            var _SlideshowTransitions = [

                //Fade
                { $Duration: 1200, $Opacity: 2 }
            ];

            var options = {
                $AutoPlay: false,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                $SlideWidth: 220,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                $SlideHeight: 441,                               //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };
            var jssor_slider1 = new $JssorSlider$("slider1_container2", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 220));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>


    <script>

        var clickid=0;
        var readyonmou=0;

        $(document).ready(function(){
            var isMobile = {
                Android: function () {
                    return navigator.userAgent.match(/Android/i);
                },
                BlackBerry: function () {
                    return navigator.userAgent.match(/BlackBerry/i);
                },
                iOS: function () {
                    return navigator.userAgent.match(/iPhone|iPad|iPod/i);
                },
                Opera: function () {
                    return navigator.userAgent.match(/Opera Mini/i);
                },
                Windows: function () {
                    return navigator.userAgent.match(/IEMobile/i);
                },
                any: function () {
                    return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
                }
            };

            if (isMobile.Android()) {
                $('#store_url').attr('href','https://play.google.com/store/apps/details?id=com.eddress');
            }
            else if (isMobile.iOS()) {
                $('#store_url').attr('href', 'https://itunes.apple.com/app/id1012242546');
            } else {
                $("#gettheappmenu").addClass('hidden-xs');
            }


            $('#playvideo').click(function(){
                $('#playvideo').hide();
                $('#ytplayer').show();
            })

        })


        $(window).scroll(function(){
            if  ($(window).scrollTop() >= 1)
            {
                $('.main-header').css({margin:'-100px 0 0 0px'});
            }
            else
            {
                $('.main-header').css({margin:'0px 0 0 0px'});
            }
        });

        $(document).ready(function(){
            $('.selecte1').show();
            $('.circle1').css({"background":"#ff5f5f"});
            $('.createedress1').css({"color":"#ff5f5f","font-weight":"bold"});
            readyonmou=1;
        });




        function details(idchange,id){
            $('.selecte1').hide();
            $('.selecte2').hide();
            $('.selecte3').hide();
            $('.selecte4').hide();
            $('.selecte5').hide();
            $('.selecte6').hide();

            clickid =id;


            $('.circle1').css({"background":"#ffe256"});
            $('.circle2').css({"background":"#ffe256"});
            $('.circle3').css({"background":"#ffe256"});
            $('.circle4').css({"background":"#ffe256"});
            $('.circle5').css({"background":"#ffe256"});
            $('.circle6').css({"background":"#ffe256"});

            document.getElementById('ddd').src="images/"+idchange+".png";
            $('.selecte'+id).show();
            $('.circle'+id).css({"background":"#ff5f5f"});
            if(id==1){
                $('.createedress'+id).css({"color":"#ff5f5f","font-weight":"bold"});
                $('.createedress2').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress3').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress4').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress5').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress6').css({"color":"#596369","font-weight":"lighter"});
            }
            if(id==2){
                $('.createedress'+id).css({"color":"#ff5f5f","font-weight":"bold"});
                $('.createedress1').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress3').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress4').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress5').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress6').css({"color":"#596369","font-weight":"lighter"});
            }
            if(id==3){
                $('.createedress'+id).css({"color":"#ff5f5f","font-weight":"bold"});
                $('.createedress2').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress1').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress4').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress5').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress6').css({"color":"#596369","font-weight":"lighter"});
            }
            if(id==4){
                $('.createedress'+id).css({"color":"#ff5f5f","font-weight":"bold"});
                $('.createedress2').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress3').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress1').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress5').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress6').css({"color":"#596369","font-weight":"lighter"});
            }
            if(id==5){
                $('.createedress'+id).css({"color":"#ff5f5f","font-weight":"bold"});
                $('.createedress2').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress3').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress4').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress1').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress6').css({"color":"#596369","font-weight":"lighter"});
            }
            if(id==6){
                $('.createedress'+id).css({"color":"#ff5f5f","font-weight":"bold"});
                $('.createedress2').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress3').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress4').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress5').css({"color":"#596369","font-weight":"lighter"});
                $('.createedress1').css({"color":"#596369","font-weight":"lighter"});
            }

        }

        function  changebackgrd(id){
            $('.circle'+id).css({"background":"#ff5f5f"});
        }

        function  returnbackgd(id){
            $('.circle'+id).css({"background":"#ffe256"});

            if(clickid==id){
                $('.circle'+clickid).css({"background":"#ff5f5f"});
            }
            if(readyonmou==id){
                $('.circle1').css({"background":"#ff5f5f"});
            }

//            readyonmou=0;
        }


    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-69397499-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>


<!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<!--<div class="row">-->
<!--<img src="images/appstore.png" style="margin-top:30px;float: left;">-->
<!--<img src="images/googlestore.png" style="margin-top:30px;margin-left: 30px;float: left;">-->
<!--</div>-->
<div style="position: relative;">
    <div style="display: none">
        <img src="<?php echo base_url() ?>images/appstore.png">
        <img src="<?php echo base_url() ?>images/appstore_hover.png">
        <img src="<?php echo base_url() ?>images/playstore.png">
        <img src="<?php echo base_url() ?>images/playstore_hover.png">
    </div>
    <div class="container-fluid">
        <div id="storebox" class="popupbox">
            <div id="storebox_closebtn" class="popupbox_closebtn closepopup"></div>
            <div class="inner">
                <div class="store_images">
                    <a onClick="ga('send', 'event', 'App Store', 'Download')" target="_blank" href="https://itunes.apple.com/app/id1012242546"><div class="appstore_img"></div></a>
                    <a onClick="ga('send', 'event', 'Google Play', 'Download')" target="_blank" href="https://play.google.com/store/apps/details?id=com.eddress"><div class="playstore_img"></div></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="center_play">
            <a onClick="ga('send', 'event', 'Video', 'Play')" class='youtube' href="http://www.youtube.com/embed/5hDV5OHKr5U?rel=0&amp;wmode=transparent"><img  src="<?php echo base_url() ?>images/play-button.png" class="playicon hidden-xs"></a>
            <a onClick="ga('send', 'event', 'Video', 'Play')" target="_blank" href="https://www.youtube.com/watch?v=5hDV5OHKr5U"><img  src="images/play-button.png" class="playicon--1 hidden-md hidden-lg hidden-sm"></a>
        </div>
    </div>
</div>

    <div class="site-header">
        <div class="main-header--1 hidden-xs hidden-sm">
            <div class="container hidden-xs hidden-sm">
                <div class="row">
                    <div class="col-md-4 lefticons">
                        &nbsp;
                    </div> <!-- /.col-md-12 -->
                    <div class="col-md-4 lefticons main-menu text-center">
                        <ul class="social-icons">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-dribbble"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 lefticons1 main-menu text-right">
                        <ul class="social-iconsimg">
                            <li><a target="_blank" onClick="ga('send', 'event', 'App Store', 'Download')" href="https://itunes.apple.com/app/id1012242546"><div class="appstore appstore_img"></div></a></li>
                            <li><a target="_blank" onClick="ga('send', 'event', 'Google Play', 'Download')" href="https://play.google.com/store/apps/details?id=com.eddress"><div class="appstore playstore_img" style="margin-left: 20px;"></div></a></li>
                        </ul>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
        <div class="main-header">
            <div class="container hidden-xs hidden-sm ">
                <div id="menu-wrapper" style="background:url(<?php echo base_url() ?>images/pixelwhite.png)">
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <div class="logo-wrapper">
                                <a href="<?php echo base_url(); ?>">eddress</a>
                            </div>
                        </div> <!-- /.logo-wrapper -->
                        <div class="col-md-10 col-sm-10 main-menu text-right">
                            <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                            <ul class="menu-first">
                                <li><a href="http://map.eddress.co">find an eddress</a></li>
                                <li><a href="<?php echo base_url(); ?>how-it-works" class="hoveron">how it works</a></li>
                                <li><a href="<?php echo base_url(); ?>faq" class="hoveron">faq</a></li>
                                <li><a target="_blank" href="http://app.myeddress.com/api-docs" class="hoveron">api</a></li>
                                <li><a target="_blank" href="<?php echo base_url(); ?>blog" class="hoveron">blog</a></li>
                                <li><a href="<?php echo base_url(); ?>eddrss" class="hoveron">contact</a></li>
                            </ul>
                        </div> <!-- /.main-menu -->
                    </div> <!-- /.row -->
                </div> <!-- /#menu-wrapper -->

            </div> <!-- /.container -->
            <div class="container  hidden-md hidden-lg">
                <nav class="navbar navbar-default navbar-fixed-top top-bar" style="background:url(<?php echo base_url() ?>images/pixelwhite.png)">
                    <div class="navbar-header">
                        <div id="menu_button">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Define your search form -->
                        <a class="navbar-brand" href="http://www.eddress.co"><div id="logo_image" class="logo-image"></div></a>
                    </div>

                    <div class="collapse navbar-collapse top-bar-section" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="http://map.eddress.co">find an eddress</a></li>
                            <li><a href="<?php echo base_url(); ?>how-it-works">how it works</a></li>
                            <li><a href="<?php echo base_url(); ?>faq">faq</a></li>
                            <li><a target="_blank" href="http://app.myeddress.com/api-docs">api</a></li>
                            <li><a target="_blank" href="<?php echo base_url(); ?>blog">blog</a></li>
                            <li><a href="<?php echo base_url(); ?>eddrss">contact</a></li>
                            <li><a href="http://map.eddress.co" onClick="ga('send', 'event', 'Map', 'Explore')">explore map</a></li>
                            <li class="hidden-xs"><button type="button" id="store_btn" class="btn btn-default navbar-btn">get the app</button></li>
                            <li class="visible-xs">
                                <div class="socialmediamenu">
                                    <a class="facebook" title="Facebook" target="_blank" href="http://www.facebook.com/myeddress"></a>
                                    <a class="twitter" title="Twitter" target="_blank" href="http://www.twitter.com/myeddress" ></a>
                                    <a class="googleplus" title="Google Plus" target="_blank" href="https://plus.google.com/+Myeddress"></a>
                                </div>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>

            </div> <!-- /.container -->
        </div> <!-- /.main-header -->
    </div> <!-- /.site-header -->


    <div class="site-slider">
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">


                    <li>
                        <div class="overlay"></div>

                        <img src="<?php echo base_url() ?>images/slide1.jpg" alt="">

                        <div class="slider-caption visible-md visible-lg">
                            <div class="row">

                            </div>
                            <h2></h2>
                            <!--<p>redefining addressess worldwide</p>-->
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    &nbsp;
                                </div>
                                <div class="col-md-4 col-sm-4" style="margin-top: -70px">
                                    <a target="_blank" onClick="ga('send', 'event', 'Map', 'Explore')" href="http://map.eddress.co" class="slider-btn">Explore Map</a>
                                </div>
                                <div class="col-md-4 col-sm-4">

                                </div>
                            </div>

                        </div>
                    </li>
                </ul>
            </div> <!-- /.flexslider -->
        </div> <!-- /.slider -->
    </div> <!-- /.site-slider -->
</div> <!-- /.site-main -->
<div class="container">

    <div class="row">
        <div class="col-md-3 col-sm-0 ">
            <div class="boxin">&nbsp;</div>
        </div>

        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="boxin2 hidden-lg hidden-md hidden-sm">
                <div class="row">
                    <div class="col-xs-1">
                    </div>
                    <div class="col-xs-5">
                        <a target="_blank" onClick="ga('send', 'event', 'App Store', 'Download')" href="https://itunes.apple.com/app/id1012242546"><img class="appstore--1 img-center" src="images/appstore.png"></a>
                    </div>
                    <div class="col-xs-4">
                        <a target="_blank" onClick="ga('send', 'event', 'Google Play', 'Download')" href="https://play.google.com/store/apps/details?id=com.eddress"><img class="appstore--1 img-center"src="images/playstore.png" ></a>
                    </div>
                    <div class="col-xs-5">

                    </div>
                </div>




            </div>
        </div>

        <div class="col-md-3 col-sm-0">
            <div class="boxin">&nbsp;</div>
        </div>
    </div>
</div>

<div class="content-section" id="address">
    <div class="container" >
        <div class="row">
            <div class="heading-section col-md-12 text-center">
                <h2>An address system for the digital age</h2>
                <div class="row">
                    <div class="col-md-2 col-sm-3">
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <div class="heading-section col-md-12 text-center">
                            <p class="bottomsmall">eddress simplifies your address by turning it into a 6 character code<span style="color:#F16061;font-weight: bold"> ABC-123</span><br>
                                Share it with your friends, delivery services or use it to check out on e-commerce platforms.
                                <br>
                                <span style="color:#F16061;font-weight: bold">change locations, keep the code!</span></p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3">
                    </div>
                </div>
            </div> <!-- /.heading-section -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div>


<div class="content-section" id="services" >
    <div class="container" >
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <img src="<?php echo base_url() ?>images/1.png" style="float:left">
                <div style="margin-left: 90px">
                    <div class="titlebold">Exhausted of filling long addresses
                        over and over? </div>
                    <div class="paraglight">Just use your eddress to checkout on e-commerce
                        platforms and voila!</div>
                </div>
            </div>
            <div class="col-md-2 col-sm-2">
                &nbsp;
            </div>
            <div class="col-md-5 col-sm-5 margintopsmall">
                <img src="<?php echo base_url() ?>images/4.png" style="float:left">
                <div style="margin-left: 90px">
                    <div class="titlebold">Tired of giving directions over the phone?</div>
                    <div class="paraglight">Share your eddress with friends, delivery services,
                        taxi drivers and many others. </div>
                </div>

            </div>
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-5 col-sm-5" style="margin-top:60px">
                <img src="<?php echo base_url() ?>images/2.png" style="float:left">
                <div style="margin-left: 90px">
                    <div class="titlebold">Relocating?</div>
                    <div class="paraglight">Don’t worry, just point your eddress to your new home and
                        all relevant parties are automatically updated. </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-2">
                &nbsp;
            </div>
            <div class="col-md-5 col-sm-5" style="margin-top:60px">
                <img src="<?php echo base_url() ?>images/5.png" style="float:left">
                <div style="margin-left: 90px">
                    <div class="titlebold">Sick of providing proof of address?</div>
                    <div class="paraglight">Soon you will be able to verify your eddress and make
                        your address official!</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-sm-5" style="margin-top:60px">
                <img src="<?php echo base_url() ?>images/3.png" style="float:left">
                <div style="margin-left: 90px">
                    <div class="titlebold">Traveling and can’t read street names?</div>
                    <div class="paraglight">Just remember...
                        your eddress code transcends language.</div>
                </div>
            </div>
            <div class="col-md-2 col-sm-2">
                &nbsp;
            </div>
            <div class="col-md-5 col-sm-5" style="margin-top:60px">
                <img src="<?php echo base_url() ?>images/6.png" style="float:left">
                <div style="margin-left: 90px">
                    <div class="titlebold">Hosting an event?</div>
                    <div class="paraglight">Just create an eddress and avoid spending your
                        time giving directions.</div>
                </div>
            </div>
        </div>

    </div> <!-- /.container -->
</div> <!-- /#services -->


<div class="content-section" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="heading-section col-md-12 text-center" style="margin-bottom:30px">
                <h2 style="color:#ff5f5f;">What can you do with eddress?</h2>
            </div> <!-- /.heading-section -->
        </div> <!-- /.row -->

        <div class="row hidden-xs hidden-sm" style="padding-bottom: 60px;margin-top:30px;">
            <div class="col-md-6 col-sm-6">
                <div style="float: right;margin-right: 333px;height: 688px;">
                    <img  src="images/device.png" style="float: right;margin-bottom: 80px;position: absolute">
                    <img id="ddd" src="images/device2.png" style="position: absolute;float: right;margin-top:78px;margin-left: 17px">
                </div>
            </div>
            <div class="col-md-1 col-sm-1" style="margin-left: -29px;margin-top:70px">
                <div class="row">
                    <hr class="linered selecte1" style="margin-top:59px">
                </div>
                <div class="row">
                    <hr class="linered selecte2" style="margin-top:139px">
                </div>
                <div class="row">
                    <hr class="linered selecte3" style="margin-top:221px">
                </div>
                <div class="row">
                    <hr class="linered selecte4" style="margin-top:302px">
                </div>
                <div class="row">
                    <hr class="linered selecte5" style="margin-top:384px">
                </div>
                <div class="row">
                    <hr class="linered selecte6" style="margin-top:466px">
                </div>

            </div>
            <div class="col-md-4 col-sm-4" style="margin-top:116px">
                <div class="verticalline"></div>
                <div class="row">
                    <div style="margin-top:0px">
                        <div onclick="details('device2','1')"  onmouseover="changebackgrd('1')" onmouseout="returnbackgd('1')" class="circle circle1" ></div>
                        <div onclick="details('device2','1')" onmouseover="changebackgrd('1')" onmouseout="returnbackgd('1')" class="createedress createedress1">

                            <span class = "visible-lg hidden-md" style="margin-top:-5px;float: left;font-weight: lighter">Instantly find & share eddresses</span>
                            <span class = "visible-md" style="margin-top:-5px;float: left;font-weight: lighter">Instantly find & share...</span>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div style="margin-top:50px">
                        <div onclick="details('device1','2')" onmouseover="changebackgrd('2')" onmouseout="returnbackgd('2')" class="circle circle2"></div>
                        <div onclick="details('device1','2')" onmouseover="changebackgrd('2')" onmouseout="returnbackgd('2')" class="createedress createedress2"><span style="margin-top:-5px;float: left;font-weight: lighter">Access your eddress book</span></div>
                    </div>
                </div>
                <div class="row">
                    <div style="margin-top:50px">
                        <div onclick="details('device3','3')" onmouseover="changebackgrd('3')" onmouseout="returnbackgd('3')" class="circle circle3"></div>
                        <div onclick="details('device3','3')" onmouseover="changebackgrd('3')" onmouseout="returnbackgd('3')" class="createedress createedress3"><span style="margin-top:-5px;float: left;font-weight: lighter">Create multiple eddresses</span></div>
                    </div>
                </div>
                <div class="row">
                    <div style="margin-top:50px">
                        <div onclick="details('device4','4')" onmouseover="changebackgrd('4')" onmouseout="returnbackgd('4')" class="circle circle4"></div>
                        <div onclick="details('device4','4')" onmouseover="changebackgrd('4')" onmouseout="returnbackgd('4')" class="createedress createedress4"><span style="margin-top:-5px;float: left;font-weight: lighter">Build your own map</span></div>
                    </div>
                </div>
                <div class="row">
                    <div style="margin-top:50px">
                        <div onclick="details('device5','5')" onmouseover="changebackgrd('5')" onmouseout="returnbackgd('5')" class="circle circle5" ></div>
                        <div onclick="details('device5','5')" onmouseover="changebackgrd('5')" onmouseout="returnbackgd('5')" class="createedress createedress5"><span style="margin-top:-5px;float: left;font-weight: lighter">Track your shipments</span></div>
                    </div>
                </div>
                <div class="row">
                    <div style="margin-top:50px">
                        <div onclick="details('device6','6')" onmouseover="changebackgrd('6')" onmouseout="returnbackgd('6')" class="circle circle6" ></div>
                        <div onclick="details('device6','6')" onmouseover="changebackgrd('6')" onmouseout="returnbackgd('6')" class="createedress createedress6"><span style="margin-top:-5px;float: left;font-weight: lighter">Request Uber </span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row hidden-md hidden-lg row-centered">
            <div class="col-sm-2">
                &nbsp;
            </div>
            <div class="col-sm-8">

                <style>
                    #slider1_container2{
                        margin-top:-25px;
                    }
                    #slider1_container2 div div img{margin-top:30px;}
                    .captchaslider{position:absolute;top:0px;left:0px;width:220px;height:25px;
                        font-size:13px;font-weight:bold;line-height:25px;text-align:center;color:#ff5f5f}
                </style>

                <div id="slider1_container2" class="imgage-center"
                     style="position: relative; top: 0px;left: -1px; width:220px;
      margin-bottom:50px;height:441px;">
                    <!-- Slides Container -->
                    <div u="slides" class="imgage-center" style="cursor: move; position: absolute;left: -1px; top: 0px;
width:220px; height:441px;overflow: hidden;">
                        <div style ="height: 441px !important;">
                            <img u="image" class="imgage-center imageseiz" src="images/device1.png"  />
                            <div u="caption" t="MCLIP|B" style="position: absolute; top: 0px; left: 0px;
                    width: 600px; height:25px;">
                                <div style="position: absolute; top: 0px; left: 0px; width:250px; height: 25px;
                        background-color: Black; opacity: 0; filter: alpha(opacity=50);">
                                </div>
                                <div class="captchaslider">
                                    Instantly find & share eddresses
                                </div>
                            </div>
                        </div>
                        <div style ="height: 441px !important;"><img class="imgage-center imageseiz" u="image" src="images/device2.png" />
                            <div u="caption" t="MCLIP|B" style="position: absolute; top: 0px; left: 0px;
                    width: 600px; height: 25px;">
                                <div style="position: absolute; top: 0px; left: 0px; width:220px; height: 25px;
                        background-color: Black; opacity: 0; filter: alpha(opacity=50);">
                                </div>
                                <div class="captchaslider">
                                    Access your eddress book
                                </div>
                            </div></div>
                        <div><img u="image" class="imgage-center imageseiz" src="images/device3.png" />
                            <div u="caption" t="MCLIP|B" style="position: absolute; top: 0px; left: 0px;
                    width: 600px; height: 25px;">
                                <div style="position: absolute; top: 0px; left: 0px; width:220px; height: 25px;
                        background-color: Black; opacity: 0; filter: alpha(opacity=50);">
                                </div>
                                <div class="captchaslider">
                                    Create multiple eddresses
                                </div>
                            </div></div>
                        <div><img u="image" style="height: 391px !important;" class="imgage-center imageseiz" src="images/device4.png" />
                            <div u="caption" t="MCLIP|B" style="position: absolute; top: 0px; left: 0px;
                    width: 600px; height: 25px;">
                                <div style="position: absolute; top: 0px; left: 0px; width:220px; height: 25px;
                        background-color: Black; opacity: 0; filter: alpha(opacity=50);">
                                </div>
                                <div class="captchaslider">
                                    Build your own map
                                </div>
                            </div></div>
                        <div><img u="image" class="imgage-center imageseiz" src="images/device5.png" />
                            <div u="caption" t="MCLIP|B" style="position: absolute; top: 0px; left: 0px;
                    width: 600px; height: 25px;">
                                <div style="position: absolute; top: 0px; left: 0px; width:220px; height: 25px;
                        background-color: Black; opacity: 0; filter: alpha(opacity=50);">
                                </div>
                                <div class="captchaslider">
                                    Track your shipments
                                </div>
                            </div></div>
                        <div><img u="image" class="imgage-center imageseiz" src="images/device6.png" />
                            <div u="caption" t="MCLIP|B" style="position: absolute; top: 0px; left: 0px;
                    width: 600px; height: 25px;">
                                <div style="position: absolute; top: 0px; left: 0px; width:220px; height: 25px;
                        background-color: Black; opacity: 0; filter: alpha(opacity=50);">
                                </div>
                                <div class="captchaslider">
                                    Request Uber
                                </div>
                            </div></div>
                    </div>
                    <style>
                        /* jssor slider bullet navigator skin 05 css */
                        /*
                        .jssorb05 div           (normal)
                        .jssorb05 div:hover     (normal mouseover)
                        .jssorb05 .av           (active)
                        .jssorb05 .av:hover     (active mouseover)
                        .jssorb05 .av:hover     (active mouseover)
                        .jssorb05 .dn           (mousedown)
                        */
                        .jssorb05 {
                            position: absolute;
                        }
                        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                            margin-top:77px;
                            position: absolute;
                            /* size of bullet elment */
                            width: 16px;
                            height: 16px;
                            background: url(images/b05.png) no-repeat;
                            overflow: hidden;
                            cursor: pointer;
                        }
                        .jssorb05 div { background-position: -7px -7px; }
                        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
                        .jssorb05 .av { background-position: -67px -7px; }
                        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
                    </style>
                    <!-- bullet navigator container -->
                    <div u="navigator" class="jssorb05" style="bottom: 67px; right: 6px;">
                        <!--&lt;!&ndash; bullet navigator item prototype &ndash;&gt;-->
                        <div u="prototype"></div>
                    </div>

                </div>
            </div>
            <div class="col-sm-2">
                &nbsp;
            </div>
        </div>
    </div> <!-- /.container -->
</div> <!-- /#portfolio -->




<!-- /#portfolio -->





<div class="content-section" id="business">
    <div class="container">
        <div class="row">
            <div class="heading-section col-md-12 text-center">
                <h2>Are you a business? </h2>
                <p>Soon you will be able to take full advantage of eddress!<a href="mailto:admin@myeddress.com"> <b>contact us</b></a></p>
            </div> <!-- /.heading-section -->
        </div> <!-- /.row -->
        <div class="row" style="margin-bottom: 50px">
            <div class="portfolio-item col-md-4 col-sm-4">
                <div class="portfolio-thumb">
                    <img src="<?php echo base_url() ?>images/business1.png" alt="">
                    <div style="text-align:center"><!---portfolio-overlay-->
                        <h3 style="margin-top:40px;">Place your business on the map</h3>
                        <p class="parabusiness">Soon, you will be able to add your business on the map and make it easy for people to get there. You may also reach out to your community and place your logo on the map.</p>
                        <!--<a href="images/gallery/p1.jpg" data-rel="lightbox" class="expand">-->
                        <!--<i class="fa fa-search"></i>-->
                        <!--</a>-->
                    </div> <!-- /.portfolio-overlay -->
                </div> <!-- /.portfolio-thumb -->
            </div> <!-- /.portfolio-item -->
            <div class="portfolio-item col-md-4 col-sm-4">
                <div class="portfolio-thumb">
                    <img src="<?php echo base_url() ?>images/pc.png" alt="">
                    <div style="text-align:center"><!---portfolio-overlay-->
                        <h3 style="margin-top:40px;">Address form widget</h3>
                        <p class="parabusiness">Place the eddress form widget on your website and spare your clients the pain of entering their address. You can automatically update your eddress database when the user relocates.</p>
                        <!--<a href="images/gallery/p1.jpg" data-rel="lightbox" class="expand">-->
                        <!--<i class="fa fa-search"></i>-->
                        <!--</a>-->
                    </div> <!-- /.portfolio-overlay -->
                </div> <!-- /.portfolio-thumb -->
            </div> <!-- /.portfolio-item -->

            <div class="portfolio-item col-md-4 col-sm-4">
                <div class="portfolio-thumb">
                    <img src="<?php echo base_url() ?>images/business3.png" alt="">
                    <div style="text-align:center"><!---portfolio-overlay-->
                        <h3 style="margin-top:40px;">Your company eddress widget</h3>
                        <p class="parabusiness">Place this widget on your website as a substitute to the map or company address.  This widget gets automatically updated with your new information. This is particularly good if you are a popup shop or a food truck.</p>
                        <!--<a href="images/gallery/p1.jpg" data-rel="lightbox" class="expand">-->
                        <!--<i class="fa fa-search"></i>-->
                        <!--</a>-->
                    </div> <!-- /.portfolio-overlay -->
                </div> <!-- /.portfolio-thumb -->
            </div> <!-- /.portfolio-item -->


        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div>






<div class="content-section" id="partners">
    <div class="container">
        <div class="row">
            <div class="heading-section col-md-12 text-center">
                <h2>Most recent news</h2>
                <p>A sneak peek at our blog</p>
            </div> <!-- /.heading-section -->
        </div> <!-- /.row -->
        <div class="row" style="margin-bottom: 50px">
            <div class="portfolio-item col-md-6 col-sm-12">
                <div class="portfolio-thumb">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <img src="<?php echo base_url() ?>images/uber.png" alt="">
                        </div>
                        <div class="col-md-6 col-sm-6 paddingleft0">
                            <!---portfolio-overlay-->
                            <span class="news_title">eddress integrates with Uber to enhance user experience</span>
                            <p class="parabusiness1">eddress integrated with Uber! With eddress you may now get an uber to your office or your friends house. You can even send your guests from one eddress to another.</p>
                            <!--<a href="images/gallery/p1.jpg" data-rel="lightbox" class="expand">-->
                            <!--<i class="fa fa-search"></i>-->
                            <!--</a>-->
                            <!-- /.portfolio-overlay -->
                        </div>
                    </div>


                </div> <!-- /.portfolio-thumb -->
            </div> <!-- /.portfolio-item -->
            <div class="portfolio-item col-md-6 col-sm-12">
                <div class="portfolio-thumb">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <img src="<?php echo base_url() ?>images/websummit.png" alt="">
                        </div>
                        <div class="col-md-6 col-sm-6 paddingleft0">
                            <!---portfolio-overlay-->
                            <a target="_blank" href="<?php echo base_url(); ?>web-summit-2015"><span class="news_title">eddress wins spot at the alpha program of Websummit 2015 in Dublin</span></a>
                            <p class="parabusiness1">
                                We are proud to announce that eddress was selected by the Websummit in Dublin to participate in the ALPHA program of 2015. Meet us at our booth to get your free PIMP MY CODE gift card.<a target="_blank" href="<?php echo base_url(); ?>web-summit-2015"> <b>read more</b></a>
                            </p>
                            <!--<a href="images/gallery/p1.jpg" data-rel="lightbox" class="expand">-->
                            <!--<i class="fa fa-search"></i>-->
                            <!--</a>-->
                            <!-- /.portfolio-overlay -->
                        </div>
                    </div>
                </div> <!-- /.portfolio-overlay -->
            </div> <!-- /.portfolio-thumb -->
        </div> <!-- /.portfolio-item -->




    </div> <!-- /.row -->
</div> <!-- /.container -->
</div>



<div class="content-section hidden-xs" id="footer">
    <div class="container" >
        <div class="row">

            <div class="col-md-3 col-sm-3">
                <img src="<?php echo base_url() ?>images/eddressfooter.png">
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="row">
                    <div class="headtitle">Download</div>
                </div>
                <div class="row">
                    <div class="subtitle"><a target="_blank" onClick="ga('send', 'event', 'App Store', 'Download')" class="subtitle" href="https://itunes.apple.com/app/id1012242546">iOS</a></div>
                </div>
                <div class="row">
                    <div class="subtitle"><a target="_blank" onClick="ga('send', 'event', 'Google Play', 'Download')" class="subtitle" href="https://play.google.com/store/apps/details?id=com.eddress">Android</a></div>
                </div>
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="row">
                    <div class="headtitle">Connect</div>
                </div>
                <div class="row">
                    <div class="subtitle"><a target="_blank" href="http://twitter.com/myeddress" class="subtitle">Twitter</a></div>
                </div>
                <div class="row">
                    <div class="subtitle"><a target="_blank" href="http://facebook.com/myeddress" class="subtitle">Facebook</a></div>
                </div>
                <div class="row">
                    <div class="subtitle"><a target="_blank" href="https://www.instagram.com/eddress_app" class="subtitle">Instagram</a></div>
                </div>
                <div class="row">
                    <div class="subtitle"><a target="_blank" href="https://plus.google.com/+Myeddress" class="subtitle">Google+</a></div>
                </div>
                <div class="row">
                    <div class="subtitle"><a target="_blank" href="http://www.youtube.com/channel/UCKq7AbUv76YTQNoOsbGXoVw" class="subtitle">YouTube</a></div>
                </div>
                <div class="row">
                    <div class="subtitle"><a target="_blank" href="<?php echo base_url(); ?>eddrss" class="subtitle">Contact Us</a></div>
                </div>
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="row">
                    <div class="headtitle">Company</div>
                </div>
                <div class="row">
                    <div class="subtitle"><a href="<?php echo base_url(); ?>" class="subtitle">About</a></div>
                </div>
                <div class="row">
                    <div class="subtitle"><a href="<?php echo base_url(); ?>faq" class="subtitle">FAQ</a></div>
                </div>
                <div class="row">
                    <div class="subtitle"><a href="<?php echo base_url(); ?>how-it-works" class="subtitle">How it works</a></div>
                </div>
                <div class="row">
                    <div class="subtitle"><a target="_blank" href="http://app.myeddress.com/api-docs" class="subtitle">Api</a></div>
                </div>
                <div class="row">
                    <div class="subtitle"><a target="_blank" href="<?php echo base_url(); ?>blog" class="subtitle">Blog</a></div>
                </div>
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="row">
                    <div class="headtitle">Legal</div>
                </div>
                <div class="row">
                    <div class="subtitle"><a href="<?php echo base_url(); ?>terms" class="subtitle">Terms and Coditions</a></div>
                </div>
                <div class="row">
                    <div class="subtitle"><a href="<?php echo base_url(); ?>terms" class="subtitle">Privacy Policy</a></div>
                </div>
            </div>
            <div class="col-md-1 col-sm-1">
                &nbsp;
            </div>
        </div> <!-- /.row -->

        <div class="row">

            <div class="col-md-12 col-sm-12 text-center">
                <div class="copyr">
                    Copyright © 2016 eddress s.a.l. All rights reserved.
                </div>
            </div>
        </div>
    </div> <!-- /.container -->
</div>









<!--<script src="js/vendor/jquery-1.11.0.min.js"></script>-->
<script>window.jQuery || document.write('<script src="<?php echo base_url() ?>js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
<script src="<?php echo base_url() ?>js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>js/plugins.js"></script>

</body>
</html>