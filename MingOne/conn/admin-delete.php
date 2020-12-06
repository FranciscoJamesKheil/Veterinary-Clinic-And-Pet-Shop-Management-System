<?php 
    session_start();

    $mysqli = new mysqli("localhost","root","","dbmingone") or die($mysqli->error());

	if($mysqli === false) {
		die("ERROR: COULD NOT CONNECT." .mysqli_connect_error());
    }
    $post_ID = $_GET['GetID'];
    $sql = "DELETE FROM home WHERE post_ID = '".$post_ID."'";

    if(mysqli_query($mysqli, $sql)) {
		header("Location: ../admin-record/home-record.php");
	}
	else {
		echo "$post_ID";
	}
?>