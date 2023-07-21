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
    });

</script>
<div id="content_box" class="content_box">
    <div class="row center-block content_center">
        <div class="col-xs-12 center-block content_right_box">
            <span id="sec1" class="bold_title_small">What can I do with my eddress code?</span><br>
            A whole bunch of things! Share your eddress with anyone in the world and make it that much easier to find you. <br><br>
			Share it with friends, delivery services or business partners, even if they don’t have the eddress app. They can view your exact location with all other information you’ve added in to help them, right here on this website.<br><br>
			You can also use your eddress on all eddress-compatible websites, so no more filling out long address fields. Just type in your 6 character alphanumeric code and you’re done.<br><br>
            
			<span id="sec2" class="bold_title_small">What if I relocate?</span><br>
            That’s no problem. Simply update your information on your existing eddress and we’ll notify your contacts and third parties automatically on your updated information. No more lost bills or calling up everyone to let them know!<br><br>

            <span id="sec3" class="bold_title_small">What if I change phone number?</span><br>
            That’s also not a problem. You’ll just need to enter and verify your new number via the same SMS process used to first register your eddress. Just like with an address change, you keep the same eddress and we’ll notify your contacts and third parties automatically on your updated information.<br><br>

            <span id="sec4" class="bold_title_small">Who can see my eddress?</span><br>
            That depends on your privacy setting. If you set yours to private, only the people you share your eddress with can see it. Unless you change your settings to public, you will need to approve or reject requests to view your eddress.<br><br>

            <span id="sec5" class="bold_title_small">Do you track my location?</span><br>
            No. Never. Not for a moment. We only use your location when you are using the app. We never store it. We promise.<br><br>

            <span id="sec6" class="bold_title_small">How do I track shipments?</span><br>
            When you use your eddress on eddress-compatible websites, you can track your shipments through your in-app notifications center, getting real-time updates on when your goods are heading to you.<br><br>

            <span id="sec7" class="bold_title_small">How is it different than Google maps?</span><br>
			Good question. Google Maps only stores business addresses. It allows you to pin your coordinates on the map but does not store your full personal address. That’s why we created eddress. In fact, eddress works with Google Maps, allowing you to not only mark, store and share your personal addresses but also to add in details that might be missing from the Google Maps of your area like small roads, directions, gyms, schools or other landmarks that help better guide the way.<br><br>
			
            <span id="sec8" class="bold_title_small">Can’t I just share my location on Whatsapp?</span><br>
            Sharing your location on Whatsapp is useful for sharing where you are right now. You can’t share locations like your home or work address unless you’re physically there. That’s not very convenient. Also, if your GPS is not working you can’t share your location on Whatsapp at all. We don’t have that problem.<br><br>

            <span id="sec9" class="bold_title_small">What if I’m a business?</span><br>
            If you’re a business you’ll be excited for the new features we’ll be rolling out very soon. Right now you can use eddress to publically list your address and all other business information right on the map so that customers can find you that much easier. <br><br>
			Soon you’ll also be able to  add multiple branches, check numbers of views and literally put your business on the map by purchasing advertising spots, targeting specific areas and sending in-app promotional content. <br><br>
			Users will also be able to follow your business and be immediately notified if you relocate – that’s particularly useful if you’re a pop-up or food truck. <br><br>

			<span id="sec10" class="bold_title_small">How can I verify my eddress?</span><br>
            Soon you will be able to verify your eddress. We are working hard to make it as simple as possible. You will get notified once we release this feature.<br><br>
        </div>
    </div>
</div>