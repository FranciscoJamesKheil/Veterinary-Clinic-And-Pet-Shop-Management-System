<?php
  session_start();

  $link = mysqli_connect("localhost", "root", "", "dbmingone");
	//view
	$sql = "SELECT * FROM `home`";
  $myData = mysqli_query($link,$sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="icon" href="../img/logo-paw.png" />
    <link rel="stylesheet" href="../fontawesome\css\all.css" />
    <title>Ming One</title>
  </head>
  <body>
    <header class="header">
      <a href="#" class="logo">
        <i class="fas fa-paw" style="color: #fd7e07"></i>
        Ming One
        <p style="font-size: 7px; margin-left: 42px">
          THE VETERINARY CLINIC AND PET SHOP
        </p>
      </a>

      <input type="checkbox" class="menu-btn" id="menu-btn" />
      <label for="menu-btn" class="menu-icon">
        <span class="nav-icon"></span>
      </label>
      <ul class="menu">
        <li class="active">
          <a href="./home.php"><i class="fa fa-home"></i>Home</a>
        </li>
        <li>
          <a href="./products.php"><i class="fab fa-product-hunt"></i>Products</a>
        </li>
        <li>
          <a href="./pets.php"><i class="fas fa-cat"></i>Pets</a>
        </li>
        <li>
          <a href="./clinic.php"><i class="fas fa-clinic-medical"></i>Clinic</a>
        </li>
        <li style="text-transform: capitalize">
          <a href="../conn/logout.php" title="Click, Auto Signout">
            <i class="fa fa-user-circle"></i
            ><?php echo $_SESSION['uname']; ?>
          </a>
        </li>
      </ul>
    </header>
    <main>
      <h2>HOME <font color="orange">UPDATES</font></h2>
      <br />
      <section>
        <img src="../img/intro-img.png" alt="" class="home-img" />
      </section>
      <br />
      <p>
        <?php
  
    while($record = mysqli_fetch_assoc($myData)){
          $pd = $record['post_description'];
          
          echo"<p style='background: #ccc; color: #444; width:70%; margin:auto; padding: 30px; text-align: justify;'>
        $pd
      </p>
      <br />"; } mysqli_close($link); ?>
      <br />
      <div class="updates" id="coverX">
        <div class="update-0">
          <i class="fas fa-cat"></i>
        </div>
        <div class="update-1">
          <i class="fas fa-dog"></i>
        </div>
        <div class="update-2">
          <i class="fas fa-fish"></i>
        </div>
      </div>
    </main>
    <footer>
      <section class="footer-content">
        <ul class="footer-page">
          <li>All Rights Reserved &copy2020 Veterinary Clinic and Pet Shop</li>
        </ul>
      </section>
    </footer>
  </body>
</html>
