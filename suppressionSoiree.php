<?php
$page_title = "suppressionSoiree";
include_once("model/sessions.php");
include_once("view/suppressionSoiree.php");

function supprimerSoiree($IdSoiree)
{
	if(isAdmin())
	{
		global $bdd;

		$answer = $bdd->prepare("DELETE FROM Soiree WHERE IdSoiree = ?");
		$answer->execute([$IdSoiree]);
	}
	else
	{
		
	}
	
}