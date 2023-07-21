<!DOCTYPE html>
<html>
<head>
    <title>Web Summit Dublin | eddress</title>
    <meta name="description" content="eddress was selected by the Websummit in Dublin to participate in the ALPHA program of 2015. Meet us at our booth for a surprise giveaway.">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.png" />

    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/fastclick.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/lightbox.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/wavesurfer.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.contact-buttons.js"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" />
    <link href="<?php echo base_url(); ?>css/websummit/websummit.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="<?php echo base_url(); ?>css/contact-buttons.css" rel="stylesheet">

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
                $('#store_url').attr('href', 'https://play.google.com/store/apps/details?id=com.eddress');
            }else if (isMobile.iOS()) {
                $('#store_url').attr('href', 'https://itunes.apple.com/app/id1012242546');
            } else {
                $("#gettheappmenu").addClass('hidden-xs');
            }

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
</head>
<body>
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
                <a target="_blank" href="https://itunes.apple.com/app/id1012242546"><div class="appstore_img"></div></a>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.eddress"><div class="playstore_img"></div></a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default navbar-fixed-top top-bar">
        <div class="navbar-header">
            <div id="menu_button">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Define your search form -->
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><div id="logo_image" class="logo-image"></div></a>
            <div id="bar-center">
                <div id="bar-profile" class="bar-profile hidden">
                    <div class="details_bar_eddress_code"><span id="eddress_code_bar"><?php if(isset($eddresss)) echo substr_replace($eddresss->code, '-', 3, 0); ?></span></div>
                    <div class="details_bar_eddress_name"><span id="fullname_bar"><?php if(isset($eddresss)) echo $eddresss->userFullName ?></span></div>
                </div>
                <div id="openinapp" class="openinapp hidden">
                    <div class="details_openinapp"><a id="openinapplink" href="eddress://?code=<?php if(isset($eddresss)){if ($eddresss->privacy != 2){echo $eddresss->privateCode;}else{echo $eddresss->code;}}?>" class="btn btn-default navbar-btn" type="button">Open in App</a></div>
                </div>
            </div>
        </div>

        <div class="collapse navbar-collapse top-bar-section" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>">about</a></li>
                <li><a href="<?php echo base_url(); ?>how-it-works">how it works</a></li>
                <li><a href="<?php echo base_url(); ?>faq">faq</a></li>
                <li><a href="http://app.myeddress.com/api-docs">api</a></li>
                <li class="visible-xs"><a id="store_url" href="#">get the app</a></li>
                <li class="hidden-xs"><button type="button" id="store_btn" class="btn btn-default navbar-btn">Get the App</button></li>
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

    <div class="row bg_img">
        <div class="col-xs-12 container_bg">
        </div>
    </div>
    <div class="white_container">
        <div class="row title_box">
            <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 text-center">
                <h2>eddress wins spot at the <a target="_blank" href="https://websummit.net/startups/alpha" class="booth_link">Alpha</a> program of Web Summit 2015</h2>
            </div>
        </div>
        <div class="row first_row">
            <div class="col-sm-6">
                <span class="about_text">We are proud to announce that eddress was selected by the Websummit in Dublin to participate in the ALPHA program of 2015. </span><br><br>
                <span class="about_text">Come meet us at our booth to get your free PIMP MY CODE gift card.</span><br><br>
                <span class="about_text">In 4 years, Web Summit has grown from 400 attendees to over 22,000 from more than 110 countries... <a target="_blank" href="http://www.websummit.net" class="booth_link">read more</a></span><br>
                <br>
                <div class="locate_text about_text text-center" style="width: 100%;">Booth eddress code</div>
                <div class="locate_text_red about_text text-center" style="width: 100%;"><a target="_blank" href="http://www.eddress.co/websmt"><b>WEB-SMT</b></a></div>
            </div>
            <div class="col-sm-6">
                <div class="red_box">
                    <b>VISIT</b><br>our stand<br>to <b>GET</b> a<br>surprise<br><b>GIVEAWAY</b>!
                </div>
            </div>
        </div>
        <div class="row second_row">
            <div class="col-sm-6">
                <div class="websummit_map"></div>
            </div>
            <div class="col-sm-6 locate_box">
                <span class="locate_text_red">Exhibition Day</span><br>
                <span class="locate_text">Thursday, November 5th</span><br>
                <br>
                <span class="locate_text_red">Stand Location</span><br>
                <span class="locate_text">Builders Area | Stand number B-147</span><br>
                <br>
                <span class="locate_text_red">Venue Map</span><br>
                <span class="locate_text">Download the map of the venue by clicking <a target="_blank" href="https://s3.amazonaws.com/files.websummit.net/2015+Startups/WS15_Startup_Map.pdf" class="booth_link">here</a></span><br>
                <br>
                <span class="locate_text_red">Booth eddress code</span><br>
                <span class="locate_text"><a target="_blank" href="http://www.eddress.co/websmt">WEB-SMT</a></span>
            </div>
        </div>
        </div>

</div><!-- /.container-fluid -->
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-69397499-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>