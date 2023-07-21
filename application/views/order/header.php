<script type='text/javascript'>
    // When your page loads
    $(document).ready(function() {
        $('#search-loading-button').hide();
    });

    $(function(){
        // When the toggle areas in your navbar are clicked, toggle them
        $("#search-button").click(function(e){
            e.preventDefault();
            $("#logo_image").addClass("logo-image-small");
            $("#search-button, #menu_button, #bar-center").hide();
            $("#search-form").show();
            $("#searchTextInput").focus();
        });

        $("#search-close-button").click(function(e){
            e.preventDefault();
            $("#search-button, #menu_button, #bar-center").show();
            $("#search-form").hide();
            if(!$("#openinapp").hasClass("visible-xs")){
                $("#logo_image").removeClass("logo-image-small");
            }
        });
    })
</script>


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
        <a class="navbar-brand" href="http://www.eddress.co"><div id="logo_image" class="logo-image"></div></a>
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
            <li class="visible-xs"><a href="http://www.eddress.co">about</a></li>
            <li class="visible-xs <?php echo activate_menu('howitworks'); ?>"><a href="<?php echo base_url(); ?>how-it-works">how it works</a></li>
            <li class="visible-xs <?php echo activate_menu('faq'); ?>"><a href="<?php echo base_url(); ?>faq">faq</a></li>
            <li class="visible-xs <?php echo activate_menu('api'); ?>"><a target="_blank" href="http://app.myeddress.com/api-docs">api</a></li>
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