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
      </a><input type="checkbox" class="menu-btn" id="menu-btn" />
      <label for="menu-btn" class="menu-icon">
        <span class="nav-icon"></span>
      </label>
      <ul class="menu">
        <li>
          <a href="./home.php"><i class="fa fa-home"></i>Home</a>
        </li>
        <li>
          <a href="./products.php"
            ><i class="fab fa-product-hunt"></i>Products</a
          >
        </li>
        <li class="active">
          <a href="./pets.php"
            ><i class="fas fa-cat"></i>Pets</a
          >
        </li>
        <li>
          <a href="./clinic.php"
            ><i class="fas fa-clinic-medical"></i>Clinic</a
          >
        </li>
        <li>
          <a href="./cart.php"><i class="fa fa-cart-plus"></i>Cart</a>
        </li>
        <li>
          <a href="./shop.php"><i class="fab fa-shopify"></i>How to shop</a>
        </li>
        <li style="text-transform: capitalize;">
          <a href="../conn/logout.php" title="Click, Auto Signout">
            <i class="fa fa-user-circle"></i><?php echo $_SESSION['uname']; ?>
          </a>
        </li>
      </ul>
    </header>
    <main>
      <h2>POPULAR <font color="orange">CATEGORIES</font></h2>
      <br />
      <div class="pet-main">
        <section class="shop-cat">
          <img src="../img/cat.png" alt="cat" class="coverY">
          <button>Shop Cat</button>
        </section>
        <br />
        <section class="shop-dog">
          <img src="../img/dog.jfif" alt="dog" class="coverY">
          <button>Shop Dog</button>
        </section>
        </section>
        <br />
        <section class="shop-fish">
          <img src="../img/fish.jfif" alt="fish" class="coverY">
          <button>Shop Fish</button>
        </section>
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
