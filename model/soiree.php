<?php
//Soirees encore en vote
function getSoireeVote()
{
	global $bdd;

	$answer = $bdd->prepare("SELECT IdSoiree,NomSoiree,DateSoiree FROM Soiree WHERE DateFermetureVote > now()");
	$data = $answer->fetchAll(PDO::FETCH_ASSOC);
	return($data);	
}
//Soiree plus en vote
function getSoiree()
{
	global $bdd;

	$answer = $bdd->prepare("SELECT IdSoiree,NomSoiree,DateSoiree FROM Soiree WHERE DateFermetureVote < now() and DateSoiree > now()");
	$data = $answer->fetchAll(PDO::FETCH_ASSOC);
	return($data);
}
?>
