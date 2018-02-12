<?php
// Variables de connection à la BDD
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ethera";
	$bdd =null;
// Connection à la bdd
try {
    $bdd = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
	}
		catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Ethera</title>
		<meta name="description" content="LaisonBDD">
		<meta name="author" content="RomainB">
	</head>
	<body>
		<form method="get" action="Update.php">
			<p>
				<label for="Joueur">Joueur :</label>
				<select name="Joueur" id="Joueur">
					<?
					$reponse = $bdd->query('SELECT * FROM joueur');
					while ($donnees = $reponse->fetch())
					{
						echo "<option value="+$donnees['idJoueur']+">"+$donnees['nom']+"</option>"
					}
					$reponse->closeCursor();
					?>
				</select>
			</p>
			<input type="submit" value="Envoyer" />
		</form>
	</body>
</html>