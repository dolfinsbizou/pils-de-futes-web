<?php
include_once("model/sessions.php");
include_once("model/membres.php");
if(!isset($_POST['Email']) or !isExistingEmail($_POST['Email']))
	header('Location: connexion.php?err=1');
else
{
	$user = getInfosUsersByEmail($_POST['Email']);
		
	if($_POST['Mdp'] != $user['Mdp'])
		header('Location: connexion.php?err=2');
	else
	{
		$_SESSION['session_id'] = $user['IdMembre'];
		$_SESSION['session_password'] = $user['Mdp'];
		header("location: ./");
	}
}

