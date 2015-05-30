<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1"> -->
    
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>

    function initialize() {
      
      var opSchool = new google.maps.LatLng(36.078053, 129.392292);
      var toSchool = new google.maps.LatLng(36.078908, 129.392384);
      var mapOptions = 
      {
        zoom: 18,
        center: toSchool
      };

      var contentString = '<h1>장흥초 앞</h1>'+'<p>택시를 부르실 때는 장흥초 후문 이라고 하셔야 합니다</p>';
      var contentString2 = '<h1>장흥초 건너편</h1>'+'<p>자동차 수리점 앞&횡단보도 앞입니다</p>';

      var infowindow = new google.maps.InfoWindow({
          content: contentString
      });

      var infowindow2 = new google.maps.InfoWindow({
          content: contentString2
      });

      var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

      var marker = new google.maps.Marker({
          position: toSchool,
          map: map,
          title: '장흥초'

      });
      var marker2 = new google.maps.Marker({
          position: opSchool,
          map: map,
          title: '장흥초 건너'

      });



         
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
      });

      google.maps.event.addListener(marker2, 'click', function() {
        infowindow2.open(map,marker2);
      });

    }

    google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
    <ul class="nav nav-tabs">
      <li role="presentation" class="active"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">Profile</a></li>
      <li role="presentation"><a href="#">Messages</a></li>
    </ul>
    <div id="map-canvas"></div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>