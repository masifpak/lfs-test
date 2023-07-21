<script type="text/javascript">
    $(function () {

        $('#add_business_btn').click(function (e) {
            e.preventDefault();
            $( "#add_new_business" ).slideToggle( "slow");
        });

    });
</script>

<div id="content_box" class="content_box">
    <div class="row center-block content_center">
        <div class="col-xs-12 center-block content_right_box">
            <div class="col-xs-12 text-center business-add">
                <a href="#" id="add_business_btn" class="business_btn btn-primary" type="submit">ADD BUSINESS</a>
            </div>
            <div id="add_new_business" style="height: 260px;display: none;" class="col-xs-12">
                <?php echo form_open_multipart('business/add');?>
                <div class="text-center">
                    <label for="businessImage">
                        <div style="background-image: url('<?php echo base_url()."images/defaultuser.png"; ?>')" class="profile_circle_image cursorpointer"></div>
                    </label>
                    <input type="file" id="businessImage" name="businessImage" style="display:none" />
                </div>
                <input type="text" id="businessFullName" name="businessFullName" placeholder="Business Name" class="business_input">
                <div class="go-btn"><input class="business_btn_small btn-secondary" type="submit" value="GO"></div>
                </form>
            </div>
            <div class="col-xs-12">
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search" >
                <span class="input-group-addon">
                    <button type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
                </div>
            </div>
            <div class="col-xs-12" style="margin-top: 10px;">
                <?php foreach ($businessList as $business) { ?>
                    <a href="<?php echo base_url()."business/edit/".$business->id; ?>">
                        <div class="col-sm-6">
                            <div class="row business_row">
                                <div class="col-sm-4">
                                    <div style="background-image: url('<?php echo $business->imageURL ?>')" class="profile_circle_image business_centerimg"></div>
                                </div>
                                <div class="col-sm-8 center_text" style="margin-top: 15px"><h3><b><?php echo $business->fullName ?></b></h3></div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>