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




include 'login.php';

 ?>

 <!DOCTYPE html>
 <html lang="fr">
 <head>
 	<meta charset="UTF-8">
<!--  	<meta http-equiv="refresh" content="5"> -->
 	<link rel="stylesheet" href="style.css">
 	<title>chat conversation</title>
 </head>
 
 <body>
 	<iframe title = "affichage des messages" width="560" height="315" src="conversation.php"></iframe>
 	<iframe title = "envoi de messages" width="560" height="315" src="formulaire.php"></iframe>

 	<?php  include 'logout.php' ?>
 </body>
 </html>