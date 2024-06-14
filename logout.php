<?php
   // Sessie starten
   session_start();
   // Sessie vernietigen (gebruiker uitloggen)
   session_destroy();
   // Redirect naar login pagina
   header('location: login.php');
?>