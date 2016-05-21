<?php
	include_once("model/sessions.php");
	include_once("model/membres.php");

	if(empty($_POST['idSoiree']) or empty($_POST['commentaire']))
		Header('Location: ajouterConfig.php?err=1');

	else
	{
		addUser($_POST['idSoiree'], $_POST['commentaire']);
			
		Header('Location: panel.php');
	}