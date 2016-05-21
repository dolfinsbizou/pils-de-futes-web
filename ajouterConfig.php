<?php
	include_once("model/sessions.php");
	include_once("model/membres.php");

	if (!isLogged())
		Header("Location: ./");

	else if (!isAdmin($_SESSION['session_id']))
		Header("Location: ./");

	else 
	{
		if(isset($_GET['err']))
		{
			$err = "<div id=\"err\" class=\"icon\">";
			switch($_GET['err'])
			{
				case 1:
					$err.= "Merci de compléter tous les champs du formulaire !";
				default:
					$err.= "Cessez donc de modifier l'URL, petit malandrin !";
			}
			$err.= "</div>";
		}
		else
			$err='';

		$page_title = "ajouterConfig";
		include_once("view/ajouterConfig.php");
	}