<?php
include_once("model/sessions.php");
if(isLogged())
	header("Location: ./");
else
{
	if(isset($_GET['err']))
	{
	
		switch($_GET['err'])
		{
			case 1:
				$err = "Email inconnu !";
				break;
			case 2:
				$err = "Mot de passe erroné !";
				break;
			default:
				$err = "Cessez donc de modifier l'URL, petit malandrin !";
		}
	}
	else
		$err='';
	$page_title="Connexion";
	include_once("view/connexion.php");
}
