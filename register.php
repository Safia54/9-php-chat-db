<?php 
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// // Afficher les erreurs et les avertissements
// error_reporting(e_all);

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'root', 'user');
	// echo "la connexion avec la bdd fonctionne";

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
        // echo 'la connexion  avec la bdd ne fonctionne PAS !!';
}

if (isset($_POST["submit"])) {

	$pseudo = filter_var($_POST["pseudo"], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	$password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);

	$insert = $bdd->query(
						
						"INSERT INTO identifiants
							(pseudo, email, password)
						VALUES 
							('$pseudo', '$email', '$password')
						");
}



 ?>

 <!DOCTYPE html>
 <html lang="fr">
 <head>
 	<meta charset="UTF-8">
 	<!-- <meta http-equiv="refresh" content="10"> -->
 	<link rel="stylesheet" href="style.css">
 	<title>chat conversation</title>
 </head>
 <body>
 	<form method = "post">

 		<label for="pseudo"> Votre pseudo </label>
 		<input type="text" name="pseudo">

 		<br/>

 		<label for="email"> Votre email </label>
 		<input type="email" name="email">

 		<br/>

 		<label for="password"> Choisir un mot de passe </label>
 		<input type="password" name="password">

 		<br/>

 		<input type="submit" name="submit" value="Envoyer">

 	</form>
 </body>
 </html>