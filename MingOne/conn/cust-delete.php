<?php 
    session_start();

    $mysqli = new mysqli("localhost","root","","dbmingone") or die($mysqli->error());

	if($mysqli === false) {
		die("ERROR: COULD NOT CONNECT." .mysqli_connect_error());
    }
    $us = $_GET['GetID'];
    $sql = "DELETE FROM customer WHERE username = '$us'";

    if(mysqli_query($mysqli, $sql)) {
		header("Location: ../admin-record/customer-record.php");
	}
	else {
		echo "$post_ID";
	}
?>