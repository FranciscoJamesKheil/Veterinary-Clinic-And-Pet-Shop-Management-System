<?php 
    session_start();

    $mysqli = new mysqli("localhost","root","","dbmingone") or die($mysqli->error());

	if($mysqli === false) {
		die("ERROR: COULD NOT CONNECT." .mysqli_connect_error());
    }
    $vid = $_GET['GetID'];
    $sql = "DELETE FROM veterinarian WHERE vet_ID = '".$vid."'";

    if(mysqli_query($mysqli, $sql)) {
		header("Location: ../admin-record/vet-record.php");
	}
	else {
		echo "Error";
	}
?>