<?php
	include_once($PROJECT_ROOT . "model/connectBdd.php");

	//infos users
	function getInfosUsersById($idMembre)
	{
		global $bdd;

		$answer = $bdd->prepare("SELECT NomMembre, PrenomMembre, Email, Mdp, Admin FROM Membres WHERE IdMembre = ?");
		$answer->execute(array($idMembre));
		$data = $answer->fetch(PDO::FETCH_ASSOC);
		return($data);	
	}
	function getInfosUsersByEmail($EmailUSers)
	{
		global $bdd;

		$answer = $bdd->prepare("SELECT NomMembre, PrenomMembre, Email, Mdp, Admin FROM Membres WHERE Email = ?");
		$answer->execute(array($EmailUSers));
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

	function addUser($email, $mdp, $nomMembre, $prenomMembre)
	{
		global $bdd;
		
		$req = $bdd->prepare('INSERT INTO users(Email, Mdp, NomMembre, PrenomMembre) VALUES (:email, :mdp, :nomMembre, :prenomMembre)');
		$req->execute(array(
				'email' => $email,
				'mdp' => sha1($mdp),
				'nomMembre' => $nomMembre,
				'prenomMembre' => $prenomMembre));
	}

	function isAdmin($idMembre)
	{
		global $bdd;

		$query = $bdd->prepare('SELECT Admin FROM Membres WHERE IdMembre = ?');
		$query->execute(array($admin));
		$testAdmin = $query->fetch(PDO::FETCH_ASSOC);
		return $testAdmin ? true : false;
	}
?>
