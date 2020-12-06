<?php
	session_start();
	$link = mysqli_connect("localhost", "root", "", "dbmingone");

	if($link === false) {
			die("ERROR: COULD NOT CONNECT." .mysqli_connect_error());
	}

	if(isset($_POST['tips'])){
		$tip=mysqli_real_escape_string($link, $_POST['tips']);

		$sql = "INSERT INTO home(post_description) VALUES('$tip')";

		if(mysqli_query($link, $sql)) {
			header("Location: ../admin/ad-home.php");
		}
	}else if(isset($_POST['add-product'])) {
		$prod_name=mysqli_real_escape_string($link, $_POST['product_name']);
		$prod_desc=mysqli_real_escape_string($link, $_POST['product_desc']);
		$prod_type=mysqli_real_escape_string($link, $_POST['product_type']);
		$prod_price=mysqli_real_escape_string($link, $_POST['product_price']);

		$sql = "INSERT INTO product(product_name, product_desc, product_type, product_price) VALUES('$prod_name', '$prod_desc', '$prod_type', '$prod_price')";

		if(mysqli_query($link, $sql)) {
			header("Location: ../admin/ad-products.php");
		}
	}else if(isset($_POST['add-pet'])) {
		$pet_name=mysqli_real_escape_string($link, $_POST['pet_name']);
		$pet_desc=mysqli_real_escape_string($link, $_POST['pet_desc']);
		$pet_type=mysqli_real_escape_string($link, $_POST['pet_type']);
		$pet_price=mysqli_real_escape_string($link, $_POST['pet_price']);

		$sql = "INSERT INTO pet(pet_name, pet_description, pet_type, pet_price) VALUES('$pet_name', '$pet_desc', '$pet_type', '$pet_price')";

		if(mysqli_query($link, $sql)) {
			header("Location: ../admin/ad-pets.php");
		}
	}else if(isset($_POST['add-vet'])) {
		$vet_f=mysqli_real_escape_string($link, $_POST['vet_fname']);
		$vet_l=mysqli_real_escape_string($link, $_POST['vet_lname']);
		$vet_c=mysqli_real_escape_string($link, $_POST['vet_contact']);
		$vet_e=mysqli_real_escape_string($link, $_POST['vet_email']);
		$vet_u=mysqli_real_escape_string($link, $_POST['vet_uname']);
		$vet_p=mysqli_real_escape_string($link, $_POST['vet_pass']);

		$sql = "INSERT INTO veterinarian(vet_fname, vet_lname, vet_contact, vet_email, vet_uname, vet_pass) VALUES('$vet_f', '$vet_l', '$vet_c', '$vet_e', '$vet_u', '$vet_p')";

		if(mysqli_query($link, $sql)) {
			header("Location: ../admin/ad-vet.php");
		}
	}else {
		$cust_f=mysqli_real_escape_string($link, $_POST['cust_fname']);
		$cust_l=mysqli_real_escape_string($link, $_POST['cust_lname']);
		$cust_c=mysqli_real_escape_string($link, $_POST['cust_contact']);
		$cust_e=mysqli_real_escape_string($link, $_POST['cust_email']);
		$cust_u=mysqli_real_escape_string($link, $_POST['cust_uname']);
		$cust_p=mysqli_real_escape_string($link, $_POST['cust_pass']);

		$sql = "INSERT INTO customer(first_name, last_name, contact_no, email, username, password) VALUES('$cust_f', '$cust_l', '$cust_c', '$cust_e', '$cust_u', '$cust_p')";

		if(mysqli_query($link, $sql)) {
			header("Location: ../admin/ad-customer.php");
		}
		else {
			$_SESSION['msg'] = "[" . $cust_u . "]" . " was already used.";
			header("Location: ../conn/msg-admin.php");
		}
	}
		mysqli_close($link);
?>