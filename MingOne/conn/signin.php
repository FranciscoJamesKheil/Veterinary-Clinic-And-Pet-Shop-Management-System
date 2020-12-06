<?php 
    session_start();
    
    $mysqli = new mysqli("localhost","root","","dbmingone") or die($mysqli->error());

    //submit data
    if(isset($_POST['as'])){
	$uname = $_POST['uname'];
    $pass = $_POST['pw'];
    
        $result = $mysqli->query("SELECT * FROM admin WHERE username='$uname' AND password='$pass';") or die($mysqli->error);

            if(!empty($_POST["uname"]) && !empty($_POST["pw"])){
                
                if(mysqli_num_rows($result) === 1){
                    $_SESSION['uname'] = $_POST['uname'];
                    header("Location: ../admin/ad-home.php");
                }
                else{
                    $_SESSION['msg'] = "Username or Password is incorrect, <br> If you don't have any account go to Sign-up";
                    sleep(1);
                    header("Location: ./msg.php");
                }
            }
            else{
                header("Location: ../index.php");
            }
        }
        else if(isset($_POST['cs'])){
        $uname = $_POST['uname'];
        $pass = $_POST['pw'];
    
        $result = $mysqli->query("SELECT * FROM customer WHERE username='$uname' AND password='$pass';") or die($mysqli->error);

            if(!empty($_POST["uname"]) && !empty($_POST["pw"])){
                
                if(mysqli_num_rows($result) === 1){
                    $_SESSION['uname'] = $_POST['uname'];
                    header("Location: ../customer/home.php");
                }
                else{
                    $_SESSION['msg'] = "Username or Password is incorrect, <br> If you don't have any account go to Sign-up";
                    sleep(1);
                    header("Location: ./msg.php");
                }
            }
            else{
                header("Location: ../index.php");
            }
        }else {
        $uname = $_POST['uname'];
        $pass = $_POST['pw'];
    
        $result = $mysqli->query("SELECT * FROM veterinarian WHERE vet_uname='$uname' AND vet_pass='$pass';") or die($mysqli->error);

            if(!empty($_POST["uname"]) && !empty($_POST["pw"])){
                
                if(mysqli_num_rows($result) === 1){
                    $_SESSION['uname'] = $_POST['uname'];
                    header("Location: ../veterinarian/home.php");
                }
                else{
                    $_SESSION['msg'] = "Username or Password is incorrect, <br> If you don't have any account go to Sign-up";
                    sleep(1);
                    header("Location: ./msg.php");
                }
            }
            else{
                header("Location: ../index.php");
            }
        }
        mysqli_close($mysqli);
?>