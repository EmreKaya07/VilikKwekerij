<?php
	session_start();
 	require_once 'conn.php';
 
	// Uitvoeren als login knop is gedrukt
	if(ISSET($_POST['login'])){
		// Controleren of gebruikersnaam en wachtwoord niet leeg zijn
		if($_POST['username'] != "" || $_POST['password'] != ""){
			// Gebruikersnaam en wachtwoord ophalen
			$username = $_POST['username'];
			$password = $_POST['password'];
			// SQL-query om de gegevens te checken
			$sql = "SELECT * FROM `account` WHERE `username`=? AND `password`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($username,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			// als de gegevens kloppen:
			if($row > 0) {
				// maak account sessie aan en redirect naar loginlukt.php
				$_SESSION['user'] = $fetch['id'];
				header("location: loginlukt.php");
			} else{
				// Zo niet toon foutmelding en redirect naar login.php om nog een keer te proberen
				echo "
				<script>alert('Ongeldige login gegevens')</script>
				<script>window.location = 'login.php'</script>
				";
			}
		}else{
			// Als gebruikersnaam/wachtwoord leeg zijn, toon foutmelding en redirect naar login.php
			echo "
				<script>alert('Vul het vereiste veld in!')</script>
				<script>window.location = 'login.php'</script>
			";
		}
	}

	// Als gebruikersnaam en wachtwoord kloppen
	if($row > 0) {
    // Maak account sessie aan
    $_SESSION['user'] = $fetch['id'];
    // Als gebruiker admin is, redirect naar admin dashboard
    if ($fetch['isadmin'] == 1) {
        header("location: admin_dashboard.php");
    } else {
        // Zo niet, redirect naar loginlukt.php
        header("location: loginlukt.php");
    }
} else {
    // Als gebruikersnaam/wachtwoord niet kloppen, toon foutmelding en redirect naar login pagina
    echo "
        <script>alert('Invalid username or password')</script>
        <script>window.location = 'login.php'</script>
    ";
}
?>