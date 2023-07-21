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
            <span id="sec1" class="bold_title_small">What's this all about?</span><br>
            eddress turns addresses digital, making it easy to share your address with anyone in the world. Using our app or website, input your physical address and turn it into an alphanumeric code. That’s an eddress. <br><br>

            <span id="sec2" class="bold_title_small">Get people where they need to be.</span><br>
            When you share this code with friends, delivery services or business partners, they receive your exact location on Google Maps with all other information to get to you.<br><br>
            You can even add audio instructions, photos and your own landmarks such as schools or roads if the Google Maps of your area isn’t detailed enough.<br><br>

            <span id="sec3" class="bold_title_small">eddress for events</span><br>
            eddress is not only for home or work addresses. Create an eddress for events and give your guests a simple code that leads them to the exact venue. When the event is over, you just delete the eddress.<br><br>

            <span id="sec4" class="bold_title_small">Find anything anywhere in the world.</span><br>
            Use eddress to look up the public addresses of businesses, restaurants and hotels. Gone are the days of calling a new restaurant on the road to figure out how to get to it.<br><br>

            <span id="sec5" class="bold_title_small">Put your contacts on the map</span><br>
            All your contacts with an eddress are stored in your in-app eddress book, making it easy to find any address you might need on the spot.<br><br>

            <span id="sec6" class="bold_title_small">Make your life easier.</span><br>
            You can use your eddress on all eddress-compatible websites, so no more filling out long address fields. Just type in your 6 to 7 character alphanumeric code and you’re done.<br><br>
            If you move, you don’t need to share your new forwarding information with everyone. Simply update your information on your existing eddress. Bye bye lost mail and undelivered bills!<br><br>

            <span id="sec7" class="bold_title_small">We do the work for you.</span><br>
            Your contacts and third parties are automatically notified on your updated eddress information. In fact, we’re working towards third parties discarding their own address databases altogether and using eddress instead. Imagine how easy life would be!<br><br>

            <span id="sec8" class="bold_title_small">Your data is safe and sound</span><br>
            All the eddress information you input from your name or business name to your postal code and coordinates are saved on our database where they are safe, secure and completely private, unless you choose to change your settings to public.<br><br>

            <span id="sec9" class="bold_title_small">Let's talk business.</span><br>
            Are you a business? Well eddress works great for you as well. Use eddress to help customers find your location easily and hassle-free. <br><br>
            Our platform also offers targeted business solutions. Add multiple branches, check numbers of views and literally put your business on the map by purchasing advertising spots, targeting specific areas and sending in-app promotional content. <br><br>
            Users can follow your business and be immediately notified if you relocate – that’s particularly useful if you’re a pop-up or food truck.  <br><br>

        </div>
    </div>
</div>