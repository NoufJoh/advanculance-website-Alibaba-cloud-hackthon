
<?php 
// conection Info
$servername = "rm-l4v670ce623mi4fxv.mysql.me-central-1.rds.aliyuncs.com";
$username = "username";
$password = "password";
$DBName = "DBName";
// Create connection
$conn = new mysqli($servername, $username, $password, $DBName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = "select * from patients";
$result = mysqli_query($conn,$query);
$query1 = "select * from ambulances WHERE id_ambulance = '003'";
$result1 = mysqli_query($conn,$query1);
?>
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

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcK2Fk4blUOsBUsb1jhJ1jv-hYVaTBqZ0&callback=initMap">
</script>
<script src="myScript.js"></script>
<php> </php>
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
#divStage{
background-color: darkseagreen;
}

#divHealth{
background-color: green;
}
#divTraffic{
background-color: green;
}
#divEqu{
background-color:green;
}

</style>
</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="container">
  <div>
  <img src="https://db-measuers.oss-me-central-1.aliyuncs.com/logo/ADVANCULANCE.svg" height="200px" width="600px" style="margin-left:300px;">

  </div>
</div>

<!-- Sidebar/menu -->


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:30px;margin-top:43px; margin-right: 30px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div id="divStage" class="w3-container w3-padding-16">
        <div class="w3-left"><i class="material-icons w3-xxxlarge">zoom_out_map</i></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4>Stage</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div id="divHealth" class="w3-container w3-padding-16">
        <div class="w3-left"><i class="material-icons w3-xxxlarge">person_outline</i></div>
        <div class="w3-right">
          
        </div>
        <div class="w3-clear"></div>
        <h4>Health Status</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div id="divTraffic" class="w3-container w3-padding-16">
        <div class="w3-left"><i class="material-icons w3-xxxlarge">my_location</i></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4>Traffic</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div id="divEqu" class="w3-container w3-padding-16">
        <div class="w3-left"><i class="material-icons w3-xxxlarge">battery_full</i></div>
        <div class="w3-right">
          
        </div>
        <div class="w3-clear"></div>
        <h4>Equipment Condition</h4>
      </div>
    </div>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-left">
        <h5>Live Location</h5>
        <div id="map"></div>
      </div>
      <div class="w3-right" >
        <h5>Feeds</h5>
     <video  control height="auto" width="700px" loop autoplay muted>
      <source src="https://db-measuers.oss-me-central-1.aliyuncs.com/videos/Camera.mp4" type="Video/mp4">
     </video>
      </div>
    </div>
  </div>
  <hr>
  
  <hr>
  <?php 
  $row = mysqli_fetch_assoc($result) ?>
   <?php 
  $row1 = mysqli_fetch_assoc($result1) ?>
  <?php $latdata = $row1['Ambulance_latitude']; ?>
  <?php $lngdata = $row1['Ambulance_longitude']; ?>
  

  <div class="w3-container">
    <h5>Vital Signs </h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      <tr>
        <td><img src="https://db-measuers.oss-me-central-1.aliyuncs.com/imgs/lungs.svg" height="100" width="100">
        </td>

        <td>Oxgyn Saturation</td>
        <td><?php echo $row['Respiration']; ?> breathe/min
        </td>
      </tr>
      <tr>
        <td><img src="https://db-measuers.oss-me-central-1.aliyuncs.com/imgs/thermometer.svg" height="100" width="100"></td>
        <td>Tempretature</td>
        <td><?php echo $row['Temperature']; ?> C
        </td>
      </tr>
      <tr>
        <td><img src="https://db-measuers.oss-me-central-1.aliyuncs.com/imgs/oxygen-breath.svg" height="100" width="100"></td>

        <td>Respiratory Rate</td>
        <td><?php echo $row['Oxygen_saturation']; ?> % </td> 
      </tr>
      <tr>
        <td><img src="https://db-measuers.oss-me-central-1.aliyuncs.com/imgs/heart-electrocardiogram-1.svg" height="100" width="100"></td>

        <td>Heart Rate</td>
        <td><?php echo $row['Heart_beat']; ?> beats/min
        </td>
      </tr>
      <tr>
        <td><img src="https://db-measuers.oss-me-central-1.aliyuncs.com/imgs/pressure-meter.svg" height="100" width="100"></td>

        <td>Blood Pressure</td>
        <td><?php echo $row['Pressure']; ?> mm Hg
        </td>
      </tr>
      
    </table><br>
    <a href="form.php">User</a>
  </div>
  <script>var map, infoWindow;
  var lat1 = '<?= $latdata ?>';
  var lng1 = '<?= $lngdata ?>';
  var lat = parseFloat(lat1);
  var lng = parseFloat(lng1);
   var pos = {lat,lng};
    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 23.708824, lng: 90.364691},
        zoom: 10
      });
      infoWindow = new google.maps.InfoWindow;
              infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
            map.setZoom(15);
    }
      </script>
  <hr>
  
  <hr>

  
  <br>
 
 




</body>
</html>
