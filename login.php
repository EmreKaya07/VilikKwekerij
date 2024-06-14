<?php session_start(); ?>
<?php
   // Controleer of de gebruiker al is ingelogd
   if (isset($_SESSION['user'])) {
       // Gebruiker is ingelogd, redirect naar index.php
       header("Location: index.php");
       exit();
   }
   ?>

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
                  <li><a href="login.php"><b>Inloggen</b></a></li>
               </ul>
            </nav>
         </div>
      </header>
      <main>
         <?php if (isset($_SESSION['message'])): ?>
         <div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg"><?php echo $_SESSION['message']['text'] ?></div>
         <script>
            (function() {
                // Verwijder het bericht 3 seconden na het laden van de pagina
                setTimeout(function(){
                    document.querySelector('.msg').remove();
                },3000)
            })();
         </script>
         <?php endif;
            unset($_SESSION['message']);
            ?>
         <h2 style="text-align: center;">Inloggen</h2>
         <div class="form-system-container" style="margin-top: 10%;">
            <form action="login_query.php" method="POST">
               <div>
                  <label>Gebruikersnaam</label>
                  <input type="text" name="username" placeholder="Uw gebruikersnaam..." required/>
               </div>
               <div>
                  <label>Wachtwoord</label>
                  <input type="password" name="password" placeholder="Uw wachtwoord..." required/>
               </div>
               <div>
                  <button name="login">Login</button>
               </div>
               <p>Nog geen account? <a href="registratie.php">Registreer hier!</a></p>
            </form>
         </div>
      </main>
      <footer class="footer">
         <p>&copy; 2024 Vilik Kwekerij. All rights reserved.</p>
      </footer>
   </body>
</html>