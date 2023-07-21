<!DOCTYPE html>
<html>
    <head>
        <title>eddress for business</title>
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
        <link href="<?php echo base_url(); ?>css/business/business.css" media="screen" rel="stylesheet" type="text/css"/>
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
            });

            $(function ()
            {
                FastClick.attach(document.body);
            });
        </script>
    </head>
    <body>
    <div class="container-fluid">
        <nav class="navbar navbar-default navbar-fixed-top top-bar">
            <div class="navbar-header">
                <div id="menu_button">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <a class="navbar-brand" href="<?php echo base_url()."business"; ?>"><div id="logo_image" class="logo-image"></div></a>
            </div>

            <?php if(isset($this->session->userdata['logged_in'])){ ?>
            <div class="collapse navbar-collapse top-bar-section" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="visible-xs"><a id="store_url" href="#">Change Password</a></li>
                    <li class="visible-xs"><a id="store_url" href="#">Logout</a></li>
                    <li class="hidden-xs">
                        <div class="dropdown navbar-btn">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <?php if (isset($this->session->userdata['logged_in'])){ echo ($this->session->userdata['logged_in']['username']); }?>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="<?php echo base_url()."business/changepassword";?>">Change Password</a></li>
                                <li><a href="<?php echo base_url()."business/logout";?>">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <?php } ?>
        </nav>