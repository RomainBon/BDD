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
		$reponse = $bdd->query("UPDATE aventurier SET ,idJoueur="+$_GET['JoueurID']+" WHERE idAventurier = "+$_GET['Aventurier']);
		
		
		 header('Location:index.php');
		?>