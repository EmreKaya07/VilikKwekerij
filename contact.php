<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Vilik Kwekerij</title>
      <link rel="stylesheet" href="CSS/style.css">
      <script src="Javascript/script.js"></script>
   </head>
   <body>
      <header>
       <div class="container">
           <h1>Vilik Kwekerij</h1>
           <nav>
               <ul>
                   <li><a href="index.php">Home</b></a></li>
                   <li><a href="catalogus.php">Catalogus</a></li>
                   <li><a href="contact.php"><b>Contact</b></a></li>
                   <?php
                   session_start();
                   // Is de gebruiker ingelogd?
                   if (isset($_SESSION['user'])) {
                       // Ja = volgende header menu item is "uitloggen"
                       echo '<li><a href="logout.php">Uitloggen</a></li>';
                   } else {
                       // Nee = volgende header menu item is "inloggen"
                       echo '<li><a href="login.php">Inloggen</a></li>';
                   }
                   ?>
               </ul>
           </nav>
       </div>
   </header>
      <main>
         <div class="container">
            <section>
               <h2>Manieren om contact met ons op te nemen</h2>
               <p>Als je vragen, feedback of problemen hebt met betrekking tot onze producten of diensten, kun je contact met ons opnemen via onderstaande gegevens:</p>
               <ul>
                  <li>Telefoonnummer: +31 6 1234 5678</li>
                  <li>Email: info@onlinestore.nl</li>
                  <li>Address: Keizersgracht 123, 1015 CJ Amsterdam, Netherlands</li>
               </ul>
            </section>
         </div>
      </main>
      <footer class="footer">
         <p>&copy; 2024 Vilik Kwekerij. All rights reserved.</p>
      </footer>
   </body>
</html>