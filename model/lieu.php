<?php
	include_once($PROJECT_ROOT . "model/connectBdd.php");
//select d'un lieu
function getLieu($idLieu)
{
	global $bdd;
	
	$answer = $bdd->prepare("SELECT name,lat,lng,adresseVille,adresseCp,adresseRue,adresseNum,type WHERE idLieu = ?");
	$answer->execute(array($idLieu));
	$data = $answer->fetch(PDO::FETCH_ASSOC);
	return ($data);
}
?>