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

	$pseudo = $_POST["pseudo"];
	$message = $_POST["message"];


	$insert = $bdd->query(
						
						"INSERT INTO messages
							(messageEnvoi, pseudo_identifiants)
						VALUES 
							('$message', '$pseudo')
						");
	var_dump($insert);
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
 		<br/>
 		<input type="text" name="pseudo">

 		<br/>

 		<label for="message"> Votre message </label>
 		<br/>
 		<textarea name="message" placeholder="écrire..."></textarea>

 		<br/>

 		<input type="submit" name="submit" value="Envoyer">
 		<br/>

 	</form>
 </body>
 </html>