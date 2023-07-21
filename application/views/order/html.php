<!DOCTYPE html>
<html>
    <head>
        <title>eddress<?php if (isset($eddresss)) echo " | ".$eddresss->userFullName." ".$eddresss->name ?></title>
        <meta name="description" content="Easily create and share addresses">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.png" />

        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/fastclick.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/lightbox.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.contact-buttons.js"></script>

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" />
        <link href="<?php echo base_url(); ?>css/lightbox.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="<?php echo base_url(); ?>css/contact-buttons.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/order/order.css" media="screen" rel="stylesheet" type="text/css"/>

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