<?php 
    session_start();

    $mysqli = new mysqli("localhost","root","","dbmingone") or die($mysqli->error());

	if($mysqli === false) {
		die("ERROR: COULD NOT CONNECT." .mysqli_connect_error());
    }
    $id = $_GET['GetID'];
    $sql = "DELETE FROM clinic WHERE tips_ID = '$id'";

    if(mysqli_query($mysqli, $sql)) {
		header("Location: ../veterinarian/clinic-record.php");
	}
	else {
		echo "$post_ID";
	}
?>