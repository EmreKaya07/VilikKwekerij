<?php
	// Gebruikersnaam en wachtwoord voor databaseverbinding
	$db_username = 'root';
	$db_password = '';
	// Maakt nieuwe PDO instantie aan voor verbinding met de database
	$conn = new PDO( 'mysql:host=localhost;dbname=vilik_accounts', $db_username, $db_password );
	// Eindigt code en laat een foutmelding zien als de verbinding mislukt om een of andere rede
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
?>