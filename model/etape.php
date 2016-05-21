<?php
include_once($PROJECT_ROOT . "model/connectBdd.php");
function getEtape($idEtape, $idConfig)
{
	global $bdd;
	
	$answer = $bdd->prepare("SELECT HeureDebut, HeureFin, IdLieu, Type FROM Etape WHERE IdEtape = ? AND IdConfig = ?")
	$data = $answer->execute(array($idEtape, $idConfig));
	$data = $answer->fetch(PDO::FETCH_ASSOC);
	return($data);
}

?>