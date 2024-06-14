<?php
session_start();
require 'conn.php'; ?>

<?php

// Controleer of de gebruiker is ingelogd en een admin is
if (!isset($_SESSION['user'])) {
    header('location: login.php');
    exit();
}

$id = $_SESSION['user'];
$sql = $conn->prepare("SELECT username, isadmin FROM `account` WHERE `id`='$id'");
$sql->execute();
$fetch = $sql->fetch();

if ($fetch['isadmin'] != 1) {
    // Gebruiker is geen admin dus redirect naar reguliere gebruikerspagina
    header('location: loginlukt.php');
    exit();
}

$username = $fetch['username'];
?>

<?php
// Haal alle gebruikersaccounts op uit de database
$sql = "SELECT * FROM `account`";
$stmt = $conn->prepare($sql);
$stmt->execute();
$accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
      <title>Vilik Kwekerij - Admin Paneel</title>
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
                   <?php
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
        <h1 style="text-align: center;">Welkom, <?php echo $username; ?>!</h1>
        <br>
        <h2 style="text-align: center;">Accounts:</h2>

<!-- Dit is de lijst met alle gebruikers en hun gegevens -->
<table class="container" style="width: 200%; height: 100%;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Achternaam</th>
            <th>Gebruikersnaam</th>
            <th>Email</th>
            <th>Adminrechten</th>
            <th>Acties</th>
        </tr>
    </thead>
    <tbody style="text-align: center;">
        <?php foreach ($accounts as $account): ?>
            <tr>
                <td><?php echo $account['id']; ?></td>
                <td><?php echo $account['name']; ?></td>
                <td><?php echo $account['surname']; ?></td>
                <td><?php echo $account['username']; ?></td>
                <td><?php echo $account['email']; ?></td>
                <td><?php echo $account['isadmin'] ? 'Ja' : 'Nee'; ?></td>
                <td>
                    <a href="edit_account.php?id=<?php echo $account['id']; ?>">[Bewerken]</a>
                    <a href="delete_account.php?id=<?php echo $account['id']; ?>" onclick="return confirm('Weet je zeker dat je deze account wilt verwijderen?')">[Verwijderen]</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<br>

<h2 style="text-align: center;">Nieuw account maken</h2>
<form action="create_account.php" method="post" class="formdiv">
    <label for="name" class="container">Naam:</label>
    <input type="text" name="name" id="name" required>

    <label for="surname" class="container">Achternaam:</label>
    <input type="text" name="surname" id="surname" required>

    <label for="username" class="container">Gebruikersnaam:</label>
    <input type="text" name="username" id="username" required>

    <label for="password" class="container">Wachtwoord:</label>
    <input type="password" name="password" id="password" required>

    <label for="email" class="container">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="isadmin">Adminrechten:</label>
    <input type="checkbox" name="isadmin" id="isadmin" value="1">
    <br>
    <br>
    <button type="submit" class="button">Maak account aan</button>
</form>
        <br>
        <br>
        <br>
        <br>
    </main>
    <footer class="footer">
         <p>&copy; 2024 Vilik Kwekerij. All rights reserved.</p>
      </footer>
   </body>
</html>