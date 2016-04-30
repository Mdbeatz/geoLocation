//map page
var mapLatitude, myLatlng, mapLongitude, pos;

function initMap() {

    $('body').addClass("loading");

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            var map = new google.maps.Map(document.getElementById('map-canvas'), {
                center: pos,
                zoom: 12,
                scrollwheel: false,
                draggable: true
            });

            $('body').removeClass("loading");

            myLatlng = new google.maps.LatLng(pos['lat'], pos['lng']);
            //map.setCenter(pos);
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                animation: google.maps.Animation.DROP,
                label: "You are here"
            });
            marker.addListener('click', function () {
                if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            });

            getWeather();
        }, function () {
            //handleLocationError(true, map, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        //handleLocationError(false, map, map.getCenter());
    }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');
}

// Getting the Weather
function getWeather() {
    $.ajax({
        url: 'http://api.openweathermap.org/data/2.5/weather?lat=' + pos['lat'] + '&lon=' + pos['lng'] + "&appid=01c048adc4c883cbae924f9c0cac4a2f&units=metric",
        data: {
            format: 'json'
        },
        error: function () {
            $('#info').html('<p>An error has occurred</p>');
        },
        success: function (data) {
            console.log(data);
            $('#location').html(data['name']);
            $('#temp').html(data['main']['temp']);
            $('#humidity').html(data['main']['humidity']);
        },
        type: 'GET'
    });
}

if (window.addEventListener) {
    window.addEventListener('load', initMap);
} else if (window.attachEvent) {
    window.attachEvent('onload', initMap);
} else {
    window.onload = initMap;
}