<?php 
    session_start();

    $mysqli = new mysqli("localhost","root","","dbmingone") or die($mysqli->error());

	if($mysqli === false) {
		die("ERROR: COULD NOT CONNECT." .mysqli_connect_error());
    }
    $pid = $_GET['GetID'];
    $sql = "DELETE FROM pet WHERE pet_ID = '".$pid."'";

    if(mysqli_query($mysqli, $sql)) {
		header("Location: ../admin-record/pet-record.php");
	}
	else {
		echo "$post_ID";
	}
?>