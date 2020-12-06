<?php
	session_start();
	$link = mysqli_connect("localhost", "root", "", "dbmingone");

	if($link === false) {
		die("ERROR: COULD NOT CONNECT." .mysqli_connect_error());
	}

	$fname=mysqli_real_escape_string($link, $_POST['firstname']);
	$lname=mysqli_real_escape_string($link, $_POST['lastname']);
	$num=mysqli_real_escape_string($link, $_POST['contact']);
	$email=mysqli_real_escape_string($link, $_POST['email']);
	$uname=mysqli_real_escape_string($link, $_POST['uname']);
	$pass=mysqli_real_escape_string($link, $_POST['pw']);

	$sql = "INSERT INTO customer(first_name, last_name, contact_no, email, username, password) VALUES('$fname', '$lname', '$num', '$email','$uname', '$pass')";

	if(mysqli_query($link, $sql)) {
		$_SESSION['msg'] = "[" . $uname . "]" . "<br>Successfully Registered";
		header("Location: ./msg.php");
	}
	else {
		$_SESSION['msg'] = "[" . $uname . "]" . " was already used.";
		header("Location: ./msg.php");
	}

		mysqli_close($link);
?>