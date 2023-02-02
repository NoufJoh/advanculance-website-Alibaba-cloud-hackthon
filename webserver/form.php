<!DOCTYPE html>
<html>
<head>
<title>ADVANCULANCE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
#map {
        height: 400px;
        width: 400px;
      }
div.end{
  height: 50;
}
.container{
  width: 100%;
  height: 90;
  background-color:lightgray;
  margin: 0 auto;
}


</style>
</head>
<body class="w3-light-grey">

<!-- Top container -->
 <div class="container">
  <div>
  <img src="https://db-measuers.oss-me-central-1.aliyuncs.com/logo/logo2.png" height="100px" width="250px" style="margin-left:120px;">

  </div>
</div>

<!-- Sidebar/menu -->


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:30px;margin-top:43px; margin-right: 30px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Vital Measuares</b></h5>
  </header>
  <hr>
  
  <hr>
  <form class="myForm" action="insert.php" method="post">
    <div class="w3-container">
      <h5>Vital Signs </h5>
      <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
        <tr>
          <td><img src="https://www.svgrepo.com/show/452056/lungs.svg" height="100" width="100">
          </td>
  
          <td>Oxgyn Saturation</td>
          <td> <input type="text" name="Oxygen_saturation" id="Oxygen_saturation"> %
        </td>
        </tr>
        <tr>
          <td><img src="https://www.svgrepo.com/show/484361/thermometer.svg" height="100" width="100"></td>
          <td>Tempretature</td>
          <td>  <input type="text" name="Temperature" id="Temperature"> C
        </td>
        </tr>
        <tr>
          <td><img src="https://www.svgrepo.com/show/280519/oxygen-breath.svg" height="100" width="100"></td>
  
          <td>Respiratory Rate</td>
          <td> 
            <input type="text" name="Respiration" id="Respiration"> breathe/min
            
          
        </td>
        </tr>
        <tr>
          <td><img src="https://www.svgrepo.com/show/482738/heart-electrocardiogram-1.svg" height="100" width="100"></td>
  
          <td>Heart Rate</td>
          <td><input type="text" name="Heart_beat" id="Heart_beat"> beats/min
          </td>
        </tr>
        <tr>
          <td><img src="https://www.svgrepo.com/show/190835/pressure-meter.svg" height="100" width="100"></td>
  
          <td>Blood Pressure</td>
          <td><input type="text" name="Pressure" id="Pressure"> mm Hg
          </td>
        </tr>
        
      </table><br>
      <input type="hidden" name="latitude">
      <input type="hidden" name="longitude">
      <p>Geo Location</p>
      <div id="map"></div>
    </div>
    <Center>
      <input type="submit" value="Submit">
    </Center>
  </form>
 
  <hr>
  
  <hr>

  
  <br>
  <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 23.708824, lng: 90.364691},
          zoom: 7
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            document.querySelector('.myForm input[name = "latitude"]').value = pos.lat;
            document.querySelector('.myForm input[name = "longitude"]').value = pos.lng;

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
            map.setZoom(15);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }

      
      
      

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcK2Fk4blUOsBUsb1jhJ1jv-hYVaTBqZ0&callback=initMap">
    </script>
</body>
</html>
