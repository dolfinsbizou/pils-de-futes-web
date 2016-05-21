<?php
	include_once("model/sessions.php");
	include_once("model/membres.php");

	if(empty($_POST['mdp']) or empty($_POST['mdp_confirm']) or empty($_POST['email']) or empty($_POST['nomMembre']) or empty($_POST['prenomMembre']))
		Header('Location: inscription.php?err=1');

	else if($_POST['mdp'] != $_POST['mdp_confirm'])
		Header('Location: inscription.php?err=2');

	else if(!preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,}$#', strtolower($_POST['email'])))
		Header('Location: inscription.php?err=3');

	else if(isExistingEmail($_POST['email'])) //Le mail existe
		Header('Location : inscription.php?err=4');
	else
	{
		addUser($_POST['nomMembre'], $_POST['prenomMembre'], $_POST['email'], $_POST['mdp']);
		$_POST['nomMembre'] = htmlspecialchars($_POST['nomMembre']);
			
		Header('Location: inscriptionValidee.php');
	}
