<?php
  session_start();
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
          <a href="./ad-home.php"><i class="fa fa-home"></i>Home</a>
        </li>
        <li>
          <a href="./ad-products.php"
            ><i class="fab fa-product-hunt"></i>Products</a
          >
        </li>
        <li>
          <a href="./ad-pets.php"><i class="fas fa-cat"></i>Pets</a>
        </li>
        <li>
          <a href="./ad-vet.php"><i class="fas fa-user-md"></i>Veterinarian</a>
        </li>
        <li>
          <a href="./ad-customer.php"><i class="fa fa-users"></i>Customer</a>
        </li>
        <li style="text-transform: capitalize;">
          <a href="../conn/logout.php" title="Click, Auto Signout">
            <i class="fa fa-user-cog"></i><?php echo $_SESSION['uname']; ?>
          </a>
        </li>
      </ul>
    </header>
    <main>
      <h2>POST <font color="orange">UPDATES</font></h2>
      <br />
      <section class="admin-post">
        <form action="../db/record-conn.php" method="POST">
          <textarea
            placeholder="Add comment here..."
            rows="10"
            cols="50"
            wrap="hard"
            name="tips"
          ></textarea>
          <br /><br />
          <input type="submit" name="post" value="POST" style="color: white" />
        </form>
      </section>
      <div>
        <br />
        <h3>POST RECORD</h3>
        <iframe
          src="../admin-record/home-record.php"
          frameborder="0"
          height="500"
          style="background: #fff; width: 70%"
        ></iframe>
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
