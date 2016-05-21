<?php
	include_once($PROJECT_ROOT . "model/connectBdd.php");

	//infos users
	function getInfosUsersByEmail($idMembre)
	{
		global $bdd;

		$answer = $bdd->prepare("SELECT IdMembre, NomMembre, PrenomMembre, Email, Mdp, Admin FROM Membres WHERE IdMembre = ?");
		$answer->execute(array($idMembre));
		$data = $answer->fetch(PDO::FETCH_ASSOC);
		return($data);	
	}

	function isExistingEmail($email)
	{
		global $bdd;
		
		$req = $bdd->prepare('SELECT Email FROM Membres WHERE LOWER(Email) = ?');
		$req->execute(array($email));
		$emails = $req->fetch(PDO::FETCH_ASSOC);
		return $emails?true:false;
	}

	function addUser($nomMembre, $prenomMembre, $email, $mdp)
	{
		global $bdd;

		$query = $bdd->prepare("INSERT INTO Membres VALUES (NULL, $email, $mdp, $nomMembre, $prenomMembre, 0)");
		$bdd->exec($query);
	}
?>
