<?php
include_once($PROJECT_ROOT . "model/connectBdd.php");

//infos users
function getInfosUsersById($idMembre)
{
	global $bdd;

	$answer = $bdd->prepare("SELECT NomMembre, PrenomMembre, Email, Mdp, Admin FROM Membre WHERE IdMembre = ?");
	$answer->execute(array($idMembre));
	$data = $answer->fetch(PDO::FETCH_ASSOC);
	return($data);	
}
function getInfosUsersByEmail($EmailUSers)
{
	global $bdd;

	$answer = $bdd->prepare("SELECT NomMembre, PrenomMembre, Email, Mdp, Admin FROM Membre WHERE Email = ?");
	$answer->execute(array($EmailUSers));
	$data = $answer->fetch(PDO::FETCH_ASSOC);
	return($data);	
}
function isExistingEmail($email)
{
	global $bdd;
	
	$req = $bdd->prepare('SELECT email FROM users WHERE LOWER(email) = :email');
	$req->execute(array('email' => strtolower($email)));
	$emails = $req->fetch(PDO::FETCH_COLUMN);
	return $emails?true:false;
}

?>
