<?php
include_once($PROJECT_ROOT . "model/connectBdd.php");

//Soiree encore en vote
function getSoireeVote()
{
	global $bdd;

	$answer = $bdd->prepare("SELECT IdSoiree,NomSoiree,DateSoiree,DateFermetureVote,DateOuvertureVote FROM Soiree WHERE DateFermetureVote > now()");
	$answer->execute([]);
	$data = $answer->fetchAll(PDO::FETCH_ASSOC);
	return($data);	
}
//Soiree plus en vote
function getSoiree()
{
	global $bdd;

	$answer = $bdd->prepare("SELECT IdSoiree,NomSoiree,DateSoiree FROM Soiree WHERE DateFermetureVote < now() and DateSoiree > now()");
	$answer->execute([]);
	$data = $answer->fetchAll(PDO::FETCH_ASSOC);
	return($data);
}
//get info soiree idSoiree
function getSoireeInfoById($idSoiree,$idMembre)
{
	global $bdd;

	$answer = $bdd->prepare("SELECT IdSoiree, NomSoiree,DateSoiree FROM Soiree WHERE IdSoiree = ? AND IdMembre = ?");
	$answer->execute(array($idSoiree,$idMembre));
	$data = $answer->fetch(PDO::FETCH_ASSOC);
	return($data);
}
//suppresion d'une soiree
function supprimerSoiree($idSoiree)
{
		global $bdd;

		$answer = $bdd->prepare("DELETE FROM Soiree WHERE IdSoiree = ?");
		$answer->execute($idSoiree);
}
//historique soiree
function getHistSoiree()
{
	global $bdd;
	
	$answer = $bdd->prepare("SELECT IdSoiree, NomSoiree,DateSoiree FROM Soiree WHERE DateSoiree < now()");
	$answer->execute([]);
	$data = $answer->fetchAll(PDO::FETCH_ASSOC);
	return($data);
}
?>
