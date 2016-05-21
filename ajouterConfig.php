<?php
	include_once("model/sessions.php");
	include_once("model/membres.php");

	if (!isLogged())
		Header("Location: ./");

	else if (!isAdmin(getUserID()))
		Header("Location: ./");

	else 
	{	



		$page_title = "ajouterConfig";
		include_once("view/ajouterConfig.php");
	}
