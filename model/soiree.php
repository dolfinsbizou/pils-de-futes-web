<?php
include_once($PROJECT_ROOT . "model/connectBdd.php");

//Soirees encore en vote
function getSoireeVote()
{
	global $bdd;

	$answer = $bdd->prepare("SELECT IdSoiree,NomSoiree,DateSoiree FROM Soiree WHERE DateFermetureVote > now()");
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

	$answer = $bdd->prepare("SELECT NomSoiree,DateSoiree FROM Soiree WHERE IdSoiree = ? AND IdMembre = ?");
	$answer->execute(array($idSoiree,$idMembre));
	$data = $answer->fetchAll(PDO::FETCH_ASSOC);
	return($data);
}
//suppresion d'une soiree
function supprimerSoiree($IdSoiree)
{
		global $bdd;

		$answer = $bdd->prepare("DELETE FROM Soiree WHERE IdSoiree = ?");
		$answer->execute([$IdSoiree]);
}
?>
