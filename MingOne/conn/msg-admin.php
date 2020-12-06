<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Window Alert</title>
</head>
<body>
<center>
    <h2><?php echo $_SESSION['msg'] ?></h2>
    <a href="../admin/ad-customer.php"><button>OKAY</button></a>
</center>
</body>
</html>