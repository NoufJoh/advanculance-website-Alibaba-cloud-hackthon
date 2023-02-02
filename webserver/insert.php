<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
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
		
		// Taking all 5 values from the form data(input)
		$Respiration = $_REQUEST['Respiration'];
		$Temperature = $_REQUEST['Temperature'];
		$Oxygen_saturation = $_REQUEST['Oxygen_saturation'];
		$Heart_beat = $_REQUEST['Heart_beat'];
		$Pressure = $_REQUEST['Pressure'];
		$latitude = $_REQUEST['latitude'];
		$longitude = $_REQUEST['longitude'];
		
		// Performing insert query execution
		// here our table name is college
		//$sql = "INSERT INTO patients (Pressure,Oxygen_saturation,Temperature,Heart_beat,Respiration) VALUES ('$Pressure','$Oxygen_saturation','$Temperature','$Heart_beat','$Respiration')";
		$sql = "UPDATE patients SET Pressure = $Pressure, Oxygen_saturation = $Oxygen_saturation, Temperature = $Temperature, Heart_beat= $Heart_beat,Respiration= $Respiration WHERE id_patients = '0003'";
		$sql2="UPDATE ambulances SET Ambulance_latitude = $latitude, Ambulance_longitude = $longitude WHERE id_ambulance = '003'";
		if(mysqli_query($conn, $sql)){
			echo "<h3> {Vital data stored in a database successfully."
				. " Please browse the admin"
				. " to view the updated data</h3>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		if(mysqli_query($conn, $sql2)){
			echo "<h3> {Location data stored in a database successfully."
				. " Please browse the admin"
				. " to view the updated data</h3>";

		} else{
			echo "ERROR: Hush! Sorry $sql2. "
				. mysqli_error($conn);
		}
		// Close connection
		mysqli_close($conn);
		?>
	</center>
	<form action="index.php">
		 <Center>
      <input type="submit" value="Main Page">
    </Center>
  </form>
</body>

</html>
