<style>
    body{
        background: none;
    }
</style>

<input id="pac-input" class="controls" type="text" placeholder="Search Box">
<div id="map_createeddress"></div>
<div class="map_center_pin"></div>
<div id="pin_eddress_btn" class="business_btn_small btn-primary">NEXT</div>
<div id="eddress_info_box" class="eddress_info_box" style="display: none;">
    <?php echo form_open('business/createeddress',array('id' => 'createeddressform'),array('businessId' => $businessId)); ?>
    <input id="latInput" type="hidden" name="lat" style="display:none;" />
    <input id="lonInput" type="hidden" name="lon" style="display:none;" />
    <input id="phoneCountryCodeInput" type="hidden" name="phoneCountryCodeInput" style="display:none;" />
    <input id="countryShortTextinput" type="hidden" name="countryShortTextinput" style="display:none;" />
    <div class="row business_create_eddress">
        <div class="material_group form-group col-sm-11">
            <h2><b>Branch Name</b></h2>
            <input type="text" class="form-control" name="nameTextinput" placeholder="Name">
        </div>
        <div class="material_group form-group col-sm-1">
            <div id="createeddress_closebtn" class="closepopup"></div>
        </div>
        <hr>
        <div class="material_group form-group col-sm-6">
            <input type="text" class="form-control" id="countryTextinput" name="countryTextinput" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Country</label>
        </div>
        <div class="material_group form-group col-sm-6">
            <input type="text" class="form-control" id="stateTextinput" name="stateTextinput" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>State</label>
        </div>
        <div class="material_group form-group col-sm-6">
            <input type="text" class="form-control" id="cityTextinput" name="cityTextinput" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>City</label>
        </div>
        <div class="material_group form-group col-sm-6">
            <input type="text" class="form-control" id="streetTextinput" name="streetTextinput" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Street</label>
        </div>
        <div class="material_group form-group col-sm-6">
            <input type="text" class="form-control" id="buildingTextinput" name="buildingTextinput" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Building</label>
        </div>
        <div class="material_group form-group col-sm-6">
            <input type="text" class="form-control" id="floorTextinput" name="floorTextinput" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Floor</label>
        </div>
        <div class="material_group form-group col-sm-6">
            <input type="text" class="form-control" id="unitTextinput" name="unitTextinput" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Unit</label>
        </div>
        <div class="material_group form-group col-sm-6">
            <input type="text" class="form-control" id="postalcodeTextinput" name="postalcodeTextinput" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Postal Code</label>
        </div>
        <div class="material_group form-group col-sm-6">
            <input type="text" class="form-control" id="phoneTextinput" name="phoneTextinput" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Phone</label>
        </div>
        <div class="material_group form-group col-sm-6">
            <input type="text" class="form-control" id="moreinfoTextinput" name="moreinfoTextinput" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>More Info</label>
        </div>
        <div class="col-sm-12">
            <div id="create_neweddress_btn" class="business_btn_small btn-primary">CREATE EDDRESS</div>
        </div>
    </div>

    </form>
</div>

<script>
    var map;
    function initAutocomplete() {
        map = new google.maps.Map(document.getElementById('map_createeddress'), {
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: true,
            mapTypeControlOptions: {
                position: google.maps.ControlPosition.RIGHT_BOTTOM
            }
        });

        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);

        map.addListener('bounds_changed', function() {
            searchBox.setBounds(map.getBounds());
        });

        searchBox.addListener('places_changed', function() {
            var places = searchBox.getPlaces();

            if (places.length == 0) {
                return;
            }

            var bounds = new google.maps.LatLngBounds();
            places.forEach(function(place) {
                if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
            });
            map.fitBounds(bounds);
        });

        getUserLocation();
    }

    function getUserLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                map.setCenter(pos);
            }, function () {
                getUserLocationFromIP();
            });
        } else {
            getUserLocationFromIP();
        }
    }

    function getUserLocationFromIP() {
        $.get("http://ipinfo.io", function (response) {
            var userLocation = response.loc;
            var commaPos = userLocation.indexOf(',');
            var userLocLat = parseFloat(userLocation.substring(0, commaPos));
            var userLocLon = parseFloat(userLocation.substring(commaPos + 1, userLocation.length));
            var pos = new google.maps.LatLng(userLocLat, userLocLon);
            map.setCenter(pos);
        }, "jsonp");
    }

    $(function(){
        $("#pin_eddress_btn").click(function(){
            var geocoder = new google.maps.Geocoder;

            var centerloc = map.getCenter();
            var lat = centerloc.lat();
            var lon = centerloc.lng();
            var latlng = {lat: parseFloat(lat), lng: parseFloat(lon)};

            geocoder.geocode({'location': latlng}, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                        console.log(results[1]);

                        var postal_code = null;
                        var street = null;
                        var city = null;
                        var city2 = null;
                        var state = null;
                        var country = null;
                        $("#postalcodeTextinput").val("");
                        $("#streetTextinput").val("");
                        $("#cityTextinput").val("");
                        $("#stateTextinput").val("");
                        $("#countryTextinput").val("");
                        $("#phoneTextinput").val("");
                        $("#phoneCountryCodeInput").val("");
                        $("#countryShortTextinput").val("");

                        for (var i=0; i<results[1].address_components.length; i++)
                        {
                            if (results[1].address_components[i].types[0] == "postal_code") {
                                postal_code = results[1].address_components[i];
                            }
                            if (results[1].address_components[i].types[0] == "neighborhood") {
                                street = results[1].address_components[i];
                            }
                            if (results[1].address_components[i].types[0] == "locality") {
                                city = results[1].address_components[i];
                            }
                            if (results[1].address_components[i].types[0] == "administrative_area_level_1") {
                                state = results[1].address_components[i];
                            }
                            if (results[1].address_components[i].types[0] == "country") {
                                country = results[1].address_components[i];
                            }
                            if (results[1].address_components[i].types[0] == "administrative_area_level_3") {
                                city2 = results[1].address_components[i];
                            }

                        }

                        if(postal_code!=null){
                            $("#postalcodeTextinput").val(postal_code.long_name);
                        }
                        if(street!=null){
                            $("#streetTextinput").val(street.long_name);
                        }
                        if(city!=null){
                            $("#cityTextinput").val(city.long_name);
                        }else if(city2 != null){
                            $("#cityTextinput").val(city2.long_name);
                        }
                        if(state!=null){
                            $("#stateTextinput").val(state.long_name);
                        }
                        if(country!=null){
                            $("#countryTextinput").val(country.long_name);
                            $("#countryShortTextinput").val(country.short_name);
                            $.get('https://restcountries.eu/rest/v1/alpha/'+country.short_name,function (response) {
                                $("#phoneTextinput").val("+"+response["callingCodes"]);
                                $("#phoneCountryCodeInput").val("+"+response["callingCodes"]);
                            });
                        }

                    } else {
//                        window.alert('No results found');
                    }
                } else {
//                    window.alert('Geocoder failed due to: ' + status);
                }

            });
            $("#pin_eddress_btn").hide();
            $("#eddress_info_box").show();
        });

        $("#create_neweddress_btn").click(function(){
            var centerloc = map.getCenter();
            var lat = centerloc.lat();
            var lon = centerloc.lng();

            $("#latInput").val(lat);
            $("#lonInput").val(lon);
            $("#createeddressform").submit();
        });

        $("#createeddress_closebtn").click(function(){
            $("#eddress_info_box").hide();
            $("#pin_eddress_btn").show();
        });
    });

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2b8VGZ3jHiJ4hahwfGs0CnNs6DAkdWaE&libraries=places&callback=initAutocomplete" async defer></script>