
/*map*/

function initMap() {
  var location = {lat: 56.1619, lng: 10.2083};

  var map = new google.maps.Map(document.getElementById('map'), {
    center: location,
    zoom: 15
  });


  var marker = new google.maps.Marker({
    position: location,
    map: map,
    title: 'Tordenskjoldsgade, Trøjborg, Århus'
  });
}

