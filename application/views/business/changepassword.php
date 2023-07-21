<div id="content_box" class="content_box">
    <div class="row center-block content_center">
        <div class="col-xs-12 center-block content_right_box">
            <div class="col-xs-12 text-center"><h1>Change Password</h1></div>
            <form method="post" class="col-xs-12 col-md-6 col-md-offset-3 form-horizontal" action="<?php echo base_url(); ?>business/dochangepassword">
                <fieldset>
                    <!-- Old Password-->
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="passwordinput_oldpassword" name="passwordinput_oldpassword" type="password" placeholder="Old Password" class="form-control input-md">
                        </div>
                    </div>
                    <!-- New Password-->
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="passwordinput_newpassword" name="passwordinput_newpassword" type="password" placeholder="New Password" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Confirm Password-->
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="passwordinput_confirmpassword" name="passwordinput_confirmpassword" type="password" placeholder="Confirm Password" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <div class="col-xs-12 text-center">
                            <button type="submit" id="signin_btn" name="signin_btn" class="btn btn-danger">Change Password</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>