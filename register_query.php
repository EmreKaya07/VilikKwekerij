<?php
   session_start();
   require_once 'conn.php';
   
	// Uitvoeren als register knop is gedrukt
   if(ISSET($_POST['register'])){
		// Controleren of naam, gebruikersnaam, wachtwoord en email niet leeg zijn
       if($_POST['name'] != "" || $_POST['username'] != "" || $_POST['password'] != "" || $_POST['email'] != ""){
           try{
			// Gegevens ophalen
               $name = $_POST['name'];
               $surname = $_POST['surname'];
               $username = $_POST['username'];
               $email = $_POST['email'];
               $password = $_POST['password'];
               // PDO Exception fout situatie instellen
               $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               // SQL-query om gegevens toe te voegen
               $sql = "INSERT INTO `account` VALUES ('', '$name', '$surname', '$username', '$password', '$email')";
               $conn->exec($sql);
           }catch(PDOException $e){
               echo $e->getMessage();
           }
           // Succesbericht opslaan in sessie
           $_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
           $conn = null;
           // Redirect  naar login pagina
           header('location:login.php');
       }else{
           // Als velden leeg zijn, toon foutmelding en redirect naar registratie pagina
           echo "
               <script>alert('Please fill up the required field!')</script>
               <script>window.location = 'registratie.php'</script>
           ";
       }
   }
?>