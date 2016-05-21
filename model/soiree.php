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
function getSoireeInfoById($idSoiree)
{
	global $bdd;

	$answer = $bdd->prepare("SELECT IdSoiree, NomSoiree,DateSoiree FROM Soiree WHERE IdSoiree = ?");
	$answer->execute(array($idSoiree));
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

function addSoiree($dateOuvertureVote, $dateFermetureVote, $dateSoiree, $idMembre)
{
	global $bdd;
	
	$req = $bdd->prepare('INSERT INTO Soiree (DateOuvertureVote, DateFermetureVote, DateSoiree, IdMembre) VALUES (:dateOuvertureVote, :dateFermetureVote, :dateSoiree, :idMembre)');
	$req->execute(array(
			'dateOuvertureVote' => $dateOuvertureVote,
			'dateFermetureVote' => $dateFermetureVote,
			'dateSoiree' => $dateSoiree,
			'idMembre' => $idMembre));
}
<<<<<<< HEAD

=======
?>
>>>>>>> origin/master
