<!DOCTYPE html>
<html>
  <head>
    <title>Accessing arguments in UI events</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <input type="hidden" id="latlong"/>
    <script>

            // In the following example, markers appear when the user clicks on the map.
            // The markers are stored in an array.
            // The user can then click an option to hide, show or delete the markers.
            var map;
            var markers = [];
      
            function initMap() {
              var haightAshbury = {lat: 37.769, lng: -122.446};
      
              map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: haightAshbury,
                mapTypeId: 'terrain'
              });
      
              // This event listener will call addMarker() when the map is clicked.
              map.addListener('click', function(event) {
                var marker = new google.maps.Marker({
                    position: event.latLng,
                    map: map
                  });
              });
            }
      
          </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtKJexfbEAvxdqLlgxcTozQv0f9TXC8io&callback=initMap">
    </script>
  </body>
</html>