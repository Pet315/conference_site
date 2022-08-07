function updateCoordinates(lat, lng) {
    document.getElementById('lat').value = lat;
    document.getElementById('lng').value = lng;
}

function initMap() {
    var map, marker;
    var myLatlng = {
        lat: 55.74,
        lng: 37.63
    };
    document.getElementById('lat').value = myLatlng.lat;
    document.getElementById('lng').value = myLatlng.lng;

    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: myLatlng
    });

    marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        draggable: true
    });

    marker.addListener('dragend', function(e) {
        var position = marker.getPosition();
        updateCoordinates(position.lat(), position.lng())
    });

    map.addListener('click', function(e) {
        marker.setPosition(e.latLng);
        updateCoordinates(e.latLng.lat(), e.latLng.lng())
    });

    map.panTo(myLatlng);
}