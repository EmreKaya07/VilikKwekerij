<?php session_start(); ?>
<!--- Doctype declaratie --->
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
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
                  <li><a href="index.php">Home</a></li>
                  <li><a href="catalogus.php">Catalogus</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  <li><a href="login.php">Inloggen</a></li>
               </ul>
            </nav>
         </div>
      </header>
      <main>
         <div class="form-system-container" style="margin-top: 2.5%;">
        <h2>Registreer</h2>
        <form action="register_query.php" method="POST">
            <div>
                <label>Voornaam</label>
                <input type="text" name="name" placeholder="Uw voornaam..." required/>
            </div>
            <div>
                <label>Achternaam</label>
                <input type="text" name="surname" placeholder="Uw achternaam..." required/>
            </div>
            <div>
                <label>Gebruikersnaam</label>
                <input type="text" name="username" placeholder="Uw gebruikersnaam..." required/>
            </div>
            <div>
                <label>Email</label>
                <input type="text" name="email" placeholder="Uw emailadres..." required/>
            </div>
            <div>
                <label>Wachtwoord</label>
                <input type="password" name="password" placeholder="Uw wachtwoord..." required/>
            </div>
            <div>
                <button name="register">Registreer</button>
            </div>
            <p>Al een account? <a href="login.php">Login</a></p>
        </form>
    </div>
      </main>
      <footer class="footer">
         <p>&copy; 2024 Vilik Kwekerij. All rights reserved.</p>
      </footer>
   </body>
</html>