<?php
	// Variables de connection à la BDD
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ethera";
		$bdd =null;
		
	// Connection à la bdd
		try 
		{
			$bdd = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		$joueur=$_GET['Joueur'];
?>

<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Ethera</title>
		<meta name="description" content="LaisonBDD">
		<meta name="author" content="RomainB">
	</head>
	<body>
		<form method="get" action="modif.php">
			<p>
				<label for="Aventurier">Aventurier :</label>
				<select name="Aventurier" id="aventurier">
					<?
					$reponse = $bdd->query('SELECT * FROM aventurier WHERE'+$joueur);
					while ($donnees = $reponse->fetch())
					{
						echo "<option value="+$donnees['idAventurier']+">"+$donnees['nom']+"</option>"
					}
					$reponse->closeCursor();
					?>
				</select>
				<input id="JoueurID"type="hidden" value="<?$joueur?>">
			</p>
			<input type="submit" value="Envoyer" />
		</form>
	</body>
</html>