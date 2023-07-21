<script type="text/javascript">
    $(function () {
        $('#assign_eddress_btn').click(function (e) {
            e.preventDefault();
            $( "#assign_dropdown" ).slideToggle( "slow");
        });

        $('#create_eddress_btn').click(function(){
            $("#createeddressform").submit();
        });

        $('#save_changes_btn').click(function(){
            $("#businessInfoForm").submit();
        });
    });
</script>

<div id="content_box" class="content_box">
    <div class="row center-block content_center">
        <div class="col-xs-12 center-block content_right_box">
            <?php echo form_open_multipart('business/saveBusinessChanges',array('id' => 'businessInfoForm'));?>
            <div class="row" style="height: 200px;">
                <?php if(isset($businessUser)) echo form_hidden('businessId', $businessUser->id); ?>
                <div class="text-center">
                    <label for="businessImage">
                        <div style="background-image: url('<?php if(isset($businessUser)){ echo $businessUser->imageURL; } else{ echo base_url()."images/defaultuser.png"; }  ?>')" class="profile_circle_image cursorpointer"></div>
                    </label>
                    <input type="file" id="businessImage" name="businessImage" style="display:none" />
                </div>
                <input type="text" value="<?php if(isset($businessUser)){ echo $businessUser->fullName; }?>" id="businessFullName" name="businessFullName" placeholder="Business Name" class="business_input">
            </div>

            <?php if(isset($businessEddresses)) { $i=0; foreach ($businessEddresses as $userEddress) { $i++;?>
            <?php echo form_hidden('item['.$i.'][id]', $userEddress->id); ?>
                <div class="row business_eddress_list">
                    <h2><b><?php echo substr_replace($userEddress->code, '-', 3, 0); ?></b></h2>
                    <input type="text" value="<?php echo $userEddress->name ?>" class="form-control" name="item[<?php echo $i; ?>][nameTextinput]" placeholder="Name">
                    <hr>
                    <div class="form-group col-sm-6">
                        <label for="countryTextinput">Country</label>
                        <input type="text" value="<?php echo $userEddress->countryName ?>" class="form-control" id="countryTextinput" name="item[<?php echo $i; ?>][countryTextinput]" placeholder="Country">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="countryTextinput">State</label>
                        <input type="text" value="<?php echo $userEddress->state ?>" class="form-control" name="item[<?php echo $i; ?>][stateTextinput]" placeholder="State">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="cityTextinput">City</label>
                        <input type="text" value="<?php echo $userEddress->city ?>" class="form-control" name="item[<?php echo $i; ?>][cityTextinput]" placeholder="City">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="streetTextinput">Street</label>
                        <input type="text" value="<?php echo $userEddress->street ?>" class="form-control" name="item[<?php echo $i; ?>][streetTextinput]" placeholder="Street">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="buildingTextinput">Building</label>
                        <input type="text" value="<?php echo $userEddress->building ?>" class="form-control" name="item[<?php echo $i; ?>][buildingTextinput]" placeholder="Building">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="floorTextinput">Floor</label>
                        <input type="text" value="<?php echo $userEddress->floor ?>" class="form-control" name="item[<?php echo $i; ?>][floorTextinput]" placeholder="Floor">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="unitTextinput">Unit</label>
                        <input type="text" value="<?php echo $userEddress->unit ?>" class="form-control" name="item[<?php echo $i; ?>][unitTextinput]" placeholder="Unit">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="postalcodeTextinput">Postal Code</label>
                        <input type="text" value="<?php echo $userEddress->postalCode ?>" class="form-control" name="item[<?php echo $i; ?>][postalcodeTextinput]" placeholder="Postal Code">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="phoneTextinput">Phone</label>
                        <input type="text" value="<?php echo $userEddress->countryCode.$userEddress->phoneNumber ?>" class="form-control" name="item[<?php echo $i; ?>][phoneTextinput]" placeholder="Phone">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="moreinfoTextinput">More Info</label>
                        <input type="text" value="<?php echo $userEddress->additionalInfo ?>" class="form-control" name="item[<?php echo $i; ?>][moreinfoTextinput]" placeholder="More Info">
                    </div>
                </div>
            <?php }} ?>
            </form>

            <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
                <div class="col-md-4 text-center" style="margin-bottom: 40px;">
                    <div id="assign_eddress_btn" class="business_btn_small btn-primary">ASSIGN EDDRESS</div>
                </div>
                <div class="col-md-4 text-center" style="margin-bottom: 40px;">
                    <div id="create_eddress_btn" class="business_btn_small btn-primary">CREATE EDDRESS</div>
                </div>
                <div class="col-md-4 text-center" style="margin-bottom: 40px;">
                    <div id="save_changes_btn" class="business_btn_small btn-primary">SAVE CHANGES</div>
                </div>
            </div>
            <?php echo form_open('business/createeddress',array('id' => 'createeddressform'),array('businessId'=>$businessUser->id)); ?>
            </form>


            <?php if(isset($businessUser)){ ?>
                <div id="assign_dropdown" class="row" style="display: none;">
                    <?php echo form_open('business/moveEddress/'.$businessUser->id);?>
                    <div class="col-md-4 col-md-offset-3">
                        <select name="owner_eddresses" class="form-control business_eddress_select">
                            <option>Select Eddress</option>
                            <?php foreach ($ownerEddresses as $code) { ?>
                                <option value="<?php echo $code ?>"><?php echo $code ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-2 text-center">
                        <input class="business_btn_small btn-secondary" type="submit" value="ASSIGN">
                    </div>
                    </form>
                </div>
            <?php } ?>
        </div>
    </div>
</div>