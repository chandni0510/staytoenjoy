<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Places Search Box</title>
    <link rel="stylesheet" type="text/css" href="map.css">
  </head>
  <body>
   <div style="display: none">
      <input id="pac-input"
             class="controls"
             type="text"
             placeholder="Enter a location">
    </div>
    <div id="map"></div>
    <div id="infowindow-content">
      <span id="place-name"  class="title"></span><br>
      <strong>Place ID</strong>: <span id="place-id"></span><br>
      <span id="place-address">"Woolloomooloo NSW 2011, Australia"</span>
    </div>

     <input type="hidden" name="lat" id="lat" value="22.7165808">
     <input type="hidden" name="lng" id="lng" value="75.87606010000002">


     

<!-- //AIzaSyBz_5wUAu5_IYnw4RnwiK50qT1GUQiy1DE&libraries
//AIzaSyBsY2EmBuZQ3_P3UyRxuA-YO98MVSn-7RE -->

    <script src="map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD22XLkrR0zFBtEK1NJojKcxdMlhQR8smM=places&callback=initMap"
         async defer></script>
         
  </body>
</html>