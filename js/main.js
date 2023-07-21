var map;
var mapScrollEnabled = true;

$(document).ready(function() {
    //$('#details_box').hide();
    $('#searchInput').hide();
    $('#loader_image').hide();
    $('#close_image').hide();
});

$(function () {
    $('#searchText').click(function () {
        $('#searchText').hide();
        $('#searchInput').show();
        $('#searchTextInput').focus();
    });

    $('#details_body').click(function() {
        if(parseInt($('#details_box').css("marginTop")) > 200){
            $('#details_box').animate({
                'marginTop' : "185px" //moves up
            });
            map.setOptions({'scrollwheel': false});
        }
    });
});

function initialize() {
    var mapOptions = {
        zoom: 16,
        scrollwheel: mapScrollEnabled,
        disableDefaultUI: true,
        streetViewControl: false,
        scaleControl: false,
        panControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);

    google.maps.event.addListener(map, 'click', function(event) {
        if(parseInt($('#details_box').css("marginTop")) < 200){
            $('#details_box').animate({
                'marginTop' : $("body").height()-415+"px" //moves down
            });
            map.setOptions({'scrollwheel': true});
        }
    });

    // Try HTML5 geolocation
    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            map.setCenter(pos);

            marker = new google.maps.Marker({
                position: pos,
                map: map,
                draggable: false,
                icon: 'http://localhost/eddressv1/images/logo-small.png'
            });
            


            google.maps.event.addListener(marker, 'click', function() {
                $('#details_box').fadeIn();
                map.panBy(0, 150);
            });
        }, function() {
            handleNoGeolocation(true);
        });
    } else {
        // Browser doesn't support Geolocation
        handleNoGeolocation(false);
    }


}

function handleNoGeolocation(errorFlag) {
    if (errorFlag) {
        var content = 'Error: The Geolocation service failed.';
    } else {
        var content = 'Error: Your browser doesn\'t support geolocation.';
    }

    var options = {
        map: map,
        position: new google.maps.LatLng(27.1959739, 78.02423269999997),
        content: content
    };

    var infowindow = new google.maps.InfoWindow(options);
    map.setCenter(options.position);
}

google.maps.event.addDomListener(window, 'load', initialize);