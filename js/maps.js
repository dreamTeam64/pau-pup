function initMap() {
  var myLatLng = {lat: 43.315819, lng: -0.3670107};

  // Create a map object and specify the DOM element for display.
  var map = new google.maps.Map(document.getElementById('map'), {
  center: myLatLng,
  scrollwheel: false,
  zoom: 9,
  zoomControl: false,
  streetViewControl: false,
  mapTypeControl: false,
  scaleControl: false,
  draggable:false,
  disableDoubleClickZoom:true
  });

  // Create a marker and set its position.
  var marker = new google.maps.Marker({
  map: map,
  animation: google.maps.Animation.DROP,
  draggable: false,
  position: myLatLng,
  title: 'Hello World!'
  });
}