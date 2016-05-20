<?php
include_once("model/sessions.php");
if(isLogged())
	header("Location: ./");
else
{
	if(isset($_GET['err']))
	{
		$err = "<div id=\"err\" class=\"icon\">";
		switch($_GET['err'])
		{
			case 1:
				$err.= "Merci de compléter tous les champs du formulaire !";
				break;
			case 2:
				$err.= "Les mots de passe ne correspondent pas !";
				break;
			case 3:
				$err.= "L'email entré est incorrect !";
				break;
			case 4:
				$err.= "Cette adresse mail existe déjà dans la base de données !";
				break;
			default:
				$err.= "Cessez donc de modifier l'URL, petit malandrin !";
		}
		$err.= "</div>";
	}
	else
		$err='';
					
	$page_title="Inscription";
	include_once("view/inscription.php");
}