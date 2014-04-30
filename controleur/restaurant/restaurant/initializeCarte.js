
var map;

function initialize(lat, long) {

    var myLatlng = new google.maps.LatLng(lat,long);
    var mapOptions = {
        zoom: 14,
        center: myLatlng
    };

    map = new google.maps.Map(document.getElementById('carte'), mapOptions);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(lat, long),
            map: map
        });
}

