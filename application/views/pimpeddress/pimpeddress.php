<!DOCTYPE html>
<html>
<head>
    <title>Pimp your eddress</title>
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
    <script type="text/javascript" src="<?php echo base_url(); ?>telinput/js/intlTelInput.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" />
    <link href="<?php echo base_url(); ?>css/pimpeddress/pimpeddress.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="<?php echo base_url(); ?>css/contact-buttons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>telinput/css/intlTelInput.css" rel="stylesheet">

    <script type="text/javascript">
        $(function ()
        {
            FastClick.attach(document.body);
        });
    </script>
</head>
<body>

<div class="wrapper">
    <div class="header text-center">
        <img src="<?php echo base_url() ?>images/pimpeddress/logo.png" >
    </div>
    <div class="content">
        <div class="col-xs-12 text-center colorred">
            <h1>PIMP YOUR CODE</h1>
        </div>
        <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center">
            <h3>Hurry up and benefit now from this exclusive chance! turn your random eddress code into a more personalized one.</h3>
        </div>
        <div class="col-xs-12 text-center input_title">
            <h2>Enter your phone number</h2>
        </div>
        <div class="col-xs-1 col-sm-offset-3"></div>
        <div class="col-xs-9 col-sm-4 phone_input">
            <input class="eddress_tel_input" type="tel" id="mobile-number">
        </div>
        <div class="col-xs-1"><div id="phone_valid" class="valid_icon" style="display: none;"><img src="<?php echo base_url() ?>images/validated.png"></div></div>
        <div class="col-xs-12 text-center input_title">
            <h2>Enter your current eddress</h2>
        </div>
        <div class="col-xs-1 col-xs-offset-1 col-sm-offset-3"></div>
        <div class="col-xs-8 col-sm-4">
            <div class="eddress_code_input">
                <input id="oldeddressleft" type="text" class="eddress_input" maxlength="3"><div class="inputseperator">-</div><input id="oldeddressright" class="eddress_input" type="text" maxlength="3">
            </div>
        </div>
        <div class="col-xs-1"><div id="oldeddress_valid" class="valid_icon" style="display: none;"><img src="<?php echo base_url() ?>images/validated.png"></div></div>
        <div class="col-xs-12 text-center input_title">
            <h2>Enter your desired code</h2>
        </div>
        <div class="col-xs-1 col-xs-offset-1 col-sm-offset-3"></div>
        <div class="col-xs-8 col-sm-4">
            <div class="eddress_code_input">
                <input id="neweddressleft" type="text" class="eddress_input" maxlength="3"><div class="inputseperator">-</div><input id="neweddressright" class="eddress_input" type="text" maxlength="3">
            </div>
        </div>
        <div class="col-xs-1"><div id="neweddress_valid" class="valid_icon" style="display: none;"><img src="<?php echo base_url() ?>images/validated.png"></div></div>
        <div class="col-xs-12 text-center input_title">
            <h2>Enter your coupon</h2>
        </div>
        <div class="col-xs-1 col-xs-offset-1 col-sm-offset-3"></div>
        <div class="col-xs-8 col-sm-4">
            <div class="eddress_code_input">
                <input id="couponcode" class="coupon_input" type="text">
            </div>
        </div>
        <div class="col-xs-1"><div id="couponcode_valid" class="valid_icon" style="display: none;"><img src="<?php echo base_url() ?>images/validated.png"></div></div>
        <div class="col-xs-12 text-center button">
            <a href="#" class="btn-primary" type="submit" id="submit_changecode">SUBMIT</a>
            <h4 id="thankyou" style="display: none;">Thank you, your request has been received and will be processed shortly.</h4>
            <h4 id="errormsg" style="display: none;">An error occured. Please try again later.</h4>
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script>
    $("#mobile-number").intlTelInput({
        utilsScript: "<?php echo base_url(); ?>telinput/js/utils.js"
    });

    $("#mobile-number").blur(function() {
        var intlNumber = $("#mobile-number").intlTelInput("getNumber");
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>pimpcode/validatephone",
            dataType: 'json',
            data: {
                'phoneNumber': intlNumber
            },
            success: function (res) {
                if (res == 1) {
                    $("#phone_valid").show();
                } else {
                    $("#phone_valid").hide();
                }
            },
            error: function (error) {
                $("#phone_valid").hide();
            }
        });
    });

    $("#oldeddressleft").blur(function() {
        validateOldEddress();
    });

    $("#oldeddressright").blur(function() {
        validateOldEddress();
    });

    $("#neweddressleft").blur(function() {
        validateNewEddress();
    });

    $("#neweddressright").blur(function() {
        validateNewEddress();
    });

    $("#couponcode").keyup(function() {
        var couponcode = $("#couponcode").val();

        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>pimpcode/validatecoupon",
            dataType: 'json',
            data: {
                'couponcode': couponcode
            },
            success: function (res) {
                if (res == 1) {
                    $("#couponcode_valid").show();
                } else {
                    $("#couponcode_valid").hide();
                }
            },
            error: function (error) {
                $("#couponcode_valid").hide();
            }
        });
    });

    $("#submit_changecode").click(function() {
        var couponcode = $("#couponcode").val();
        var phoneNumber = $("#mobile-number").intlTelInput("getNumber");
        var oldEddress = '';
        var newEddress = '';

        var eddoldleft = $("#oldeddressleft").val();
        var eddoldright = $("#oldeddressright").val();

        if(eddoldleft != null){
            oldEddress = eddoldleft.concat(eddoldright);
        }

        var eddnewleft = $("#neweddressleft").val();
        var eddnewright = $("#neweddressright").val();


        if(eddnewleft != null){
            newEddress = eddnewleft.concat(eddnewright);
        }

        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>pimpcode/submitChangeCode",
            dataType: 'json',
            data: {
                'phoneNumber': phoneNumber,
                'oldEddress': oldEddress,
                'newEddress': newEddress,
                'couponcode': couponcode
            },
            success: function (res) {
                if (res == 1) {
                    $("#errormsg").hide();
                    $("#submit_changecode").hide();
                    $("#thankyou").show();
                } else {
                    $("#thankyou").hide();
                    $("#submit_changecode").show();
                    $("#errormsg").show();
                }
            },
            error: function (error) {
                $("#thankyou").hide();
                $("#submit_changecode").show();
                $("#errormsg").show();
            }
        });
    });

    function validateOldEddress(){
        var eddleft = $("#oldeddressleft").val();
        var eddright = $("#oldeddressright").val();
        var oldEddress = '';

        if(eddleft != null){
            oldEddress = eddleft.concat(eddright);
        }

        if(oldEddress.length == 6){
            jQuery.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>pimpcode/validateoldeddress",
                dataType: 'json',
                data: {
                    'oldEddress': oldEddress
                },
                success: function (res) {
                    if (res == 1) {
                        $("#oldeddress_valid").show();
                    } else {
                        $("#oldeddress_valid").hide();
                    }
                },
                error: function (error) {
                    $("#oldeddress_valid").hide();
                }
            });
        }
    }

    function validateNewEddress(){
        var eddleft = $("#neweddressleft").val();
        var eddright = $("#neweddressright").val();
        var newEddress = '';

        if(eddleft != null){
            newEddress = eddleft.concat(eddright);
        }

        if(newEddress.length == 6){
            jQuery.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>pimpcode/validateneweddress",
                dataType: 'json',
                data: {
                    'newEddress': newEddress
                },
                success: function (res) {
                    if (res == 1) {
                        $("#neweddress_valid").show();
                    } else {
                        $("#neweddress_valid").hide();
                    }
                },
                error: function (error) {
                    $("#neweddress_valid").hide();
                }
            });
        }
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
</body>
</html>