<?php
//infos users
function getInfosUsers($idMembre)
{
	$answer = $bdd->prepare("SELECT NomMembre, PrenomMembre, Email, Mdp, Admin FROM Membre WHERE IdMembre = ?");
	$answer->execute(array($idMembre));
	$data = $answer->fetch(PDO::FETCH_ASSOC);
	return($data);	
}
?>