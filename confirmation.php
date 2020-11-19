<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="styles/header.css">
   <link rel="stylesheet" href="styles/shared.css">
   <link rel="stylesheet" href="styles/layout.css">
   <title>Document</title>
   <script src="js/formSubmitted.js"></script>
</head>

<body>
      <header class="header content">
      <nav id="nav">
         <a href="index.html">
         <span class="logo"><img src="images/logo.svg" alt="logo"></span>
         </a>
         <ul class="nav-menu">
            <li><a href="menu.html">Menu</a></li>
            <li><a href="booking.html">Booking </a></li>
            <li><a href="articles.html">Articles</a></li>
         </ul>
      </nav>
   </header>
   <main>
      <section class="content">
         <h3>Thank you for submitting your form, <?php echo $_GET["name"]; ?>!</h3>
         <p>We will send you a confirmation of your booking to <?php echo $_GET["email"]; ?> or text you on <?php echo $_GET["mobile"]; ?></p>
      </section>
   </main>
</body>
</html>