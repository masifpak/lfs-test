<script type="text/javascript">
    $(function () {
        var page = $("html, body");

        $('#content_box').find('a').click(function(){
            var $href = $(this).attr('href');
            var $anchor = $('#'+$href).offset();

            page.on("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove", function(){
                page.stop();
            });
            page.animate({ scrollTop: $anchor.top - 60 }, 'slow', function(){
                page.off("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove");
            });
            return false;
        });
    });

    // When your page loads
    $(document).ready(function() {
        $('#search-button').hide();

        $("#apiconnect_form").submit(function (e) {
            e.preventDefault();

            var emailName = $("input#name").val();
            var emailCompanyName = $("input#company_name").val();
            var emailUser = $("input#email").val();
            var emailComment = $("textarea#comment").val();

            jQuery.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>api/send_email",
                dataType: 'json',
                data: {
                    'emailName': emailName,
                    'emailCompanyName': emailCompanyName,
                    'emailUser': emailUser,
                    'emailComment': emailComment
                },
                success: function (res) {
                    if (res == 1) {
                        $("#email_sent_failed").hide();
                        $("#email_sent_success").show();
                    } else {
                        $("#email_sent_success").hide();
                        $("#email_sent_failed").show();
                    }
                },
                error: function (error) {
                    $("#email_sent_success").hide();
                    $("#email_sent_failed").show();
                }
            });

            $("input#name").val("");
            $("input#company_name").val("");
            $("input#email").val("");
            $("textarea#comment").val("");

        });
    });

</script>

<div id="content_box" class="content_box">
    <div class="row center-block content_center">
        <div class="col-xs-12 center-block content_right_box">
            <form id="apiconnect_form" class="form-horizontal" role="form" data-toggle="validator">
                <fieldset>

                    <!-- Form Name -->
                    <legend>API Access Request</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Name">Name</label>
                        <div class="col-md-4">
                            <input id="name" name="Name" type="text" placeholder="Your name" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Company Name">Company Name</label>
                        <div class="col-md-4">
                            <input id="company_name" name="Company Name" type="text" placeholder="Your company name" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email</label>
                        <div class="col-md-4">
                            <input id="email" name="email" type="email" placeholder="Your company email" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Comment">Why would you like to use our API?</label>
                        <div class="col-md-4">
                            <textarea class="form-control" id="comment" name="Comment">Let us know how eddress can help your business!</textarea>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="sumbit"></label>
                        <div class="col-md-4">
                            <input id="sumbit" type="submit" value="Submit" class="button btn btn-primary">
                            <br><br>
                            <span id="email_sent_success" style="display: none;">Your email was successfully sent.</span>
                            <span id="email_sent_failed" style="display: none;">An error occurred, your email was not sent.</span>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>