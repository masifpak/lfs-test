<script type="text/javascript">
    // When your page loads
    $(document).ready(function() {
        $('#search-button').hide();
    });

    $(function(){
        $('#register_form').submit(function(e){
            e.preventDefault();

            var form_data = {
                email: $('#textinput_register').val()
            };

            $.ajax({
                url: "<?php echo base_url(); ?>index.php/business/registerUser",
                type: 'POST',
                data: form_data,
                success: function(msg) {
                    alert(msg);
                }

            });
        });
    });
</script>

<div id="content_box" class="content_box">
    <div class="row center-block content_center">
        <div class="col-xs-12 center-block content_right_box">
            <div class="col-xs-12 text-center"><h1>eddress for business</h1></div>
            <form method="post" class="col-xs-12 col-md-6 col-md-offset-3 form-horizontal content_center" action="<?php echo base_url(); ?>business/loginBusinessUser">
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="textinput_username" name="textinput_username" type="text" placeholder="Email" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Password input-->
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="passwordinput_password" name="passwordinput_password" type="password" placeholder="Password" class="form-control input-md">

                        </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <div class="col-xs-12 text-center">
                            <button type="submit" id="signin_btn" name="signin_btn" class="btn btn-danger">Sign In</button>
                        </div>
                    </div>
                </fieldset>
            </form>
            <form id="register_form" class="col-xs-12 col-md-6 col-md-offset-3 form-horizontal content_center">
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="textinput_register" name="textinput_register" type="text" placeholder="Email" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <div class="col-xs-12 text-center">
                            <button type="submit" id="register_btn" name="register_btn" class="btn btn-danger">Register</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>