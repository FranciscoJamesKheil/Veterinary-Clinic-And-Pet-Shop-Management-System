<?php
	session_start();
	$link = mysqli_connect("localhost", "root", "", "dbmingone");

	if($link === false) {
			die("ERROR: COULD NOT CONNECT." .mysqli_connect_error());
	}

    if(isset($_POST['tips'])){
            $t=mysqli_real_escape_string($link, $_POST['tip']);

            $sql = "INSERT INTO clinic(tips_post) VALUES('$t')";

            if(mysqli_query($link, $sql)) {
                header("Location: ../veterinarian/clinic.php");
            }
            else {
                echo "error:";
                header("Location: ../veterinarian/clinic.php");
            }
        }
		mysqli_close($link);
    ?>