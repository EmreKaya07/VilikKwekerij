<?php
    require 'conn.php';
    session_start();
 
    // Als gebruiker niet is ingelogd, redirect naar login pagina
    if(!ISSET($_SESSION['user'])){
        header('location:login.php');
    }

    // ID ophalen uit sessie
    $id = $_SESSION['user'];
    // SQL-query om gebruikersnaam op te halen met ID
    $sql = $conn->prepare("SELECT username FROM `account` WHERE `id`='$id'");
    $sql->execute();
    $fetch = $sql->fetch();
    $username = $fetch['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vilik Kwekerij</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="Javascript/script.js"></script>
    <!-- Na 3 seconden redirect naar homepagina -->
    <meta http-equiv="refresh" content="3; url=index.php" />
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
        <!-- Toon welkomstbericht met gebruikersnaam -->
        <h1 style="text-align: center;">Welkom <?php echo $username; ?>!</h1>
        <h3 style="text-align: center;">Je wordt zo naar de homepage doorverwezen...</h3>
        <a style="text-align: center;" href="logout.php" class="button">Toch uitloggen?</a>
    </main>
    <footer class="footer">
        <p>&copy; 2024 Vilik Kwekerij. All rights reserved.</p>
    </footer>
</body>
</html>