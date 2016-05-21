<?php
include_once($PROJECT_ROOT . "model/connectBdd.php");
function getEtapes($idConfig)
{
	global $bdd;
	
	$answer = $bdd->prepare("SELECT HeureDebut, HeureFin, IdLieu, Type FROM Etape WHERE IdConfig = ?");
	$data = $answer->execute(array($idConfig));
	$data = $answer->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

function addEtape($heureDebut, $heureFin, $idLieu, $idConfig)
{
	global $bdd;
	
	$req = $bdd->prepare("INSERT INTO Etape (HeureDebut, HeureFin, IdLieu, IdConfig) VALUES (:heureDebut ,:heureFin, :idLieu, :idConfig)");
	$req->bindParam(':heureDebut', $heureDebut);
	$req->bindParam(':heureFin', $heureFin);
	$req->bindParam(':idLieu', $idLieu);
	$req->bindParam(':idConfig', $idConfig);
	$req->execute();
}
?>
