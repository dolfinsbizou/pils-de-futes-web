<?php
//Soirees encore en vote
function getSoireeVote()
{
	$bdd = init_connection();
	$answer = $bdd->prepare("SELECT IdSoiree,NomSoiree,DateSoiree FROM Soiree WHERE DateFermetureVote > now()");
	//$answer->execute(array($idCard,$idUser,$idCard,$idUser));
	$data = $answer->fetchAll(PDO::FETCH_ASSOC);
	return($data);	
}
//Soiree plus en vote
function getSoiree()
{
	$bdd = init_connection();
	$answer = $bdd->prepare("SELECT IdSoiree,DateSoiree FROM Soiree WHERE DateFermetureVote < now() and DateSoiree > now()");
	//$answer->execute(array($idCard));
	$data = $answer->fetchAll(PDO::FETCH_ASSOC);
	return($data);
}
?>