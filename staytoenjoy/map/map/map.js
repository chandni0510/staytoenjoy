function initMap() {
	var latitude = document.getElementById('lat').value;
	var longitude = document.getElementById('lng').value;

	var uluru = {lat: parseFloat(latitude), lng: parseFloat(longitude)};
	var map = new google.maps.Map(
	      document.getElementById('map'),
	      {center: uluru, zoom: 13});
	
  var geocoder = new google.maps.Geocoder();
  var infowindow = new google.maps.InfoWindow();
  
   // add marker and show address start
    var marker = new google.maps.Marker({
        map: map,
        position: uluru,
        draggable: false,
        anchorPoint: new google.maps.Point(0, -29)
     });
    
    //show address
    var address = document.getElementById('place-address').innerHTML ;
    infowindow.setContent(address);
    infowindow.open(map, marker);
    //show address

   // add marker and show address end



  // on click courser address get start
  google.maps.event.addListener(map, 'click', function(event) {
  geocoder.geocode({
    'latLng': event.latLng
  }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      if (results[0]) {
        console.log(results[0].formatted_address);
        console.log(results[0].geometry.location.lat());
        console.log(results[0].geometry.location.lng());
      }
    }
  });
});
// on click courser address get start





// search address start
  
  var input = document.getElementById('pac-input');
  var autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);

  // Specify just the place data fields that you need.
  autocomplete.setFields(['place_id', 'geometry', 'name', 'formatted_address']);

  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  var infowindow = new google.maps.InfoWindow();
  var infowindowContent = document.getElementById('infowindow-content');
  infowindow.setContent(infowindowContent);

  

  var marker = new google.maps.Marker({map: map});
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });

    

  autocomplete.addListener('place_changed', function() {
    infowindow.close();
    var place = autocomplete.getPlace();

    if (!place.place_id) {
      return;
    }
    geocoder.geocode({'placeId': place.place_id}, function(results, status) {
      if (status !== 'OK') {
        window.alert('Geocoder failed due to: ' + status);
        return;
      }

      map.setCenter(results[0].geometry.location);

      // Set the position of the marker using the place ID and location.
      marker.setPlace(
          {placeId: place.place_id, location: results[0].geometry.location});

      marker.setVisible(true);

      
      infowindowContent.children['place-name'].textContent = place.name;
      infowindowContent.children['place-id'].textContent = place.place_id;
      infowindowContent.children['place-address'].textContent =
          results[0].formatted_address;

      console.log(results[0].geometry.location.lat());
      console.log(results[0].geometry.location.lng());
      console.log(infowindowContent);


      infowindow.open(map, marker);
    });
  });

  // search address end

  
}