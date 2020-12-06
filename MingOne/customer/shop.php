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
        </p> </a
      ><input type="checkbox" class="menu-btn" id="menu-btn" />
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
        <li>
          <a href="./pets.php"><i class="fas fa-cat"></i>Pets</a>
        </li>
        <li>
          <a href="./clinic.php"
            ><i class="fas fa-clinic-medical"></i>Clinic</a
          >
        </li>
        <li>
          <a href="./cart.php"><i class="fa fa-cart-plus"></i>Cart</a>
        </li>
        <li class="active">
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
      <section>
        <h2>This is how you're going to shop</h2>
        <br />
        <div class="process">
          <h4>
            Here are three simple steps to finding the item you are looking for:
          </h4>
          <br />
          <p>
            Browse the Home page, which displays the categories available and
            links to special offers. Click a category to see the selection of
            items available within that category. Click the item and you will
            see a detailed explanation of the item's features. Or, search for
            specific items by entering a brand name, an item description, or
            keywords in the "Search" window displayed on every merchandise page.
            You will be given a list of items that best match your search
            criteria. When you find something you want to purchase, click "Add
            to cart." The number of items in your cart will be displayed in the
            top right corner of the page. You can view or change the contents of
            your cart at any time by clicking "Cart." When you're finished
            shopping, click "Cart" to view the contents. Click on Proceed to
            Checkout. You will be forwarded to our login page where you can Sign
            In or Create a New Account.
          </p>
          <br /><br />
          <h4>Registration</h4>
          <p>
            If you have not registered on petshop.ph before, you will need to
            create a new account.<br />

            Enter your e-mail address, password. Then click the "Register"
            button to create an account. <br />

            Enter your Billing and Shipping information and click on "Checkout".
            <br />

            You will then see a page displaying the contents of your shopping
            cart. On this page, you have the opportunity to Ship to Multiple
            Addresses or upgrade your ship method to "Express" if that option is
            available for the item(s) in your cart. <br /><br />
            To complete the checkout process: <br />

            Click on Continue Checkout. <br />
            Enter your payment information. <br />
            Click on Continue Checkout. <br />
            Click the Complete Checkout button to complete your order.
          </p>
          <br /><br />
          <h4>Shipping Address Book</h4>
          <br />
          <p>
            If the merchandise will be sent to an address other than the billing
            address, enter the address information under the shipping
            information area of "My Account." This information will be updated
            automatically and stored in your personal address book for future
            purchases. Your address book can store and maintain up to 99 names
            and addresses.
          </p>
          <br />
          <br />
          <h4>Shipping Information</h4>
          <br />
          <p>
            Currently, petshop.ph offers shipping in the Philippines only. We do
            not currently deliver to PO boxes, international addresses, or a few
            limited geographic areas within the Philippines.
            <br />
            We plan to expand service to more areas in the future. Please check
            our site regularly for updates.
          </p>
          <br />
          <br />
          <h4>Payment</h4>
          <p>
            All prices and peso amounts on this site are in Philippine Pesos.
            petshop.ph accepts the following credit cards: PayMaya, Pay Pal,
            VISA and MasterCard. Some electronic transactions may require
            extended processing in addition to credit card authorization. You
            will be notified by a petshop.ph customer service representative if
            extended processing is required to complete your transaction request
            through our web site. All credit cards must be valid, authentic and
            you must be authorized to use them. If the charge is not authorized
            or accepted, we reserve the right to cancel your order without
            notice or liability. We reserve the right to stop accepting credit
            cards from one or more issuers. Your credit card will be charged
            when the goods are shipped to you.
          </p>
          <br /><br />

          <h4>Security</h4>
          <p>
            To ensure that information entered on petshop.ph is secure, we have
            implemented a security protocol called SSL. (Secure Socket Layer)
            SSL encrypts all information entered on our site before it is sent
            over the internet. SSL prevents eavesdropping and ensures data
            integrity during communications. For further information please view
            our privacy statement. Encryption is the process of taking the
            characters you enter at your computer keyboard and scrambling them
            into bits of code before transmission. The bits are securely
            transmitted over the internet to be deciphered when received by
            petshop.ph. To anyone else, the information would be unreadable.
          </p>
          <br />
          <br />Source of text: from <Petshop> 
            <br>
          <a href="https://petshop.ph/pages/online-shopping-101">https://petshop.ph/pages/online-shopping-101</p>
        </div>
      </section>
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
