<?php 
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// // Afficher les erreurs et les avertissements
// error_reporting(e_all);

	



if (isset($_POST["submit"])) {

	$email = htmlspecialchars($_POST["email"]);
	$password = htmlspecialchars($_POST["password"]);

	if ($_SESSION = $email AND $_SESSION = $password) {
	$login = session_start();
	}else {
		echo "Ce n'est pas le bon pseudo ou mot de passe.";
	}
}


 ?>

 <!DOCTYPE html>
 <html lang="fr">
 <head>
 	<meta charset="UTF-8">
<!--  	<meta http-equiv="refresh" content="10"> -->
 	<link rel="stylesheet" href="style.css">
 	<title>chat conversation</title>
 </head>
 <body>
 	<form method = "post" action="formulaire.php">

 		<label for="email"> Votre email </label>
 		<br/>
 		<input type="email" name="email">

 		<br/>

 		<label for="password"> Votre mot de passe </label>
 		<br/>
 		<input type="password" name="password">

 		<br/>

 		<input type="submit" name="submit" value="Se connecter">

 		<br/>

 		<a href="register.php"> Pas encore inscrit ? </a>

 		<br/>

 	</form>

 	
 </body>
 </html>