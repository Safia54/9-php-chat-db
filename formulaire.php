
<?php 

session_start();


ini_set('display_errors', 1); // Afficher les erreurs à l'écran
ini_set('display_startup_errors', 1); // Même si display_errors est activé, des erreurs peuvent survenir lors de la séquence de démarrage de PHP, et ces erreurs sont cachées. Avec cette option, vous pouvez les afficher, ce qui est recommandé pour le déboguage. En dehors de ce cas, il est fortement recommandé de laisser display_startup_errors à off.
error_reporting(E_ALL); // Afficher les erreurs et les avertissements







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

	$pseudo = $_SESSION['pseudo'];
	$message = $_POST["message"];


	$insert = $bdd->query("
						
						INSERT INTO messages
							(messageEnvoi, pseudo_identifiants)
						VALUES 
							('$message', '$pseudo')
						");
	// var_dump($insert);

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

 	<form action='#' id='chat' method='post'>
 		<label for="pseudo"> Votre pseudo </label>
 		<br/>
 		<input type="text" name="pseudo" class="text" value="<?php echo $_SESSION['pseudo']; ?>" disabled>
 		<br/>

 		<label for="message"> Votre message </label>
 		<br/>
 		<textarea name="message" placeholder="écrire votre message ici..." class='text' ></textarea>

 		<br/>

 		<input type="submit" name="submit" value="Envoyer" class="bouton">
 		<br/>

 	</form>

   </div>
</div>
 </body>
 </html>