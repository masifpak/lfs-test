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
            <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/5hDV5OHKr5U" frameborder="0" allowfullscreen></iframe>
            </div><br>
            <span id="sec1" class="bold_title_small">Download</span><br>
            Let's start at the very beginning. It's a very good place to start. Download the eddress App <a target="_blank" href="">here.</a><br><br>

            <span id="sec2" class="bold_title_small">Register</span><br>
            When you first open the app, you will be prompted to enter your phone number. An activation code will be sent to you by SMS in just a moment. Once you get the code, enter it in the app and get this party started. If you ever change your phone number, that’s no problem. You’ll just be required to enter and verify a new number via the same SMS process.<br><br>

            <span id="sec3" class="bold_title_small">Create an eddress</span><br>
            Enter your name and general information, pick if it's a home, work, event or other address and add in your full address information. When you're done, we assign your address a random alphanumerical code. Ta-da! You have an eddress. Don't worry, you can edit or delete it entirely at any time!<br><br>
			
			<span id="sec4" class="bold_title_small">Add in all the little details</span><br>
            Make your eddress as easy as possible to find by dragging and dropping landmarks like gas stations, gyms and hospitals onto your map. No one gives directions better than you, and so we built in an audio recording feature so you can guide the way. Add images of your location, so people will know what they’re looking for. You can make your eddress private, the only way people can view it is if you share it with them or they send you a request that you approve. <br><br>

            <span id="sec5" class="bold_title_small">Share it with everyone</span><br>
            Share your eddress with friends, family and delivery services to guide them easily to you. Whoever you share it with doesn’t need to have the eddress app to view your location. They can simply enter it <a target="_blank" href="http://map.eddress.co">right here</a> on the main page of this website.<br><br>

            <span id="sec6" class="bold_title_small">Use it online</span><br>
            Use your eddress on all eddress compatible websites, so you never have to manually type in all your address information again!<br><br>

            <span id="sec7" class="bold_title_small">Create as many as you want</span><br>
            Create as many eddresses as you want. Create one for your office and ones for your events and just give guests the code! You can simply delete your eddress once your event is over.<br><br>

            <span id="sec8" class="bold_title_small">Jazz up your profile</span><br>
            Upload a profile picture and add in your information. This way, when you share your eddress with businesses such as online shopping or travel agencies, they have all the information they need to bill you. Remember, your personal information is always private.<br><br>

            <span id="sec9" class="bold_title_small">Find your way</span><br>
            Search a public eddress or click on one of your contacts and view all the information you need to get there. Tap ‘map’ to enable map view from your current location to the eddress. Listen to audio instructions and view pictures of the location to guide you. Find your friends, family, hotels, restaurants and all sorts of business across the world!<br><br>

            <span id="sec10" class="bold_title_small">Find your contacts</span><br>
            Your eddress book compiles all the eddresses of your contacts. Search by name or phone number. The main screen on your app shows your contacts eddresses on the map with their profile pictures as well as public eddresses with business logos. Tap on any for instant directions!<br><br>

            <span id="sec11" class="bold_title_small">Relocate your eddress</span><br>
            Moving? Don’t worry. Tap on ‘Relocate eddress’ in your profile and just update your information. You keep your original eddress code and we notify all parties that you’ve shared your code with. No more lost bills or calling up everyone to let them know!<br><br>

            <span id="sec12" class="bold_title_small">Stay on top of everything</span><br>
            All your activity and the activity of third parties using your eddress is tracked in the notifications. See when shipments and deliveries heading to your eddress arrive, when your contacts create new eddresses and when your requests to view eddresses are approved. It also tells you when your phonebook contacts have joined and created an eddress and if one of your contacts has relocated and updated their eddress or phone number.<br><br>

            <span id="sec13" class="bold_title_small">Boost your Business</span><br>
            eddress is not just for personal use. Create an eddress for your business, add in all your info and set your logo as a profile picture. Choose the ‘public’ option on your privacy settings and now you’re on the map for everyone to see! Soon you will be able to use eddress to reach your target audience via in-app promotional messages and see how many times your eddress has been viewed and much more.<br><br>
        </div>
    </div>
</div>