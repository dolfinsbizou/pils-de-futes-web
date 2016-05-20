<?php
include_once("model/sessions.php");
include_once("model/membres.php");
if(!isset($_POST['Email']) or !isExistingPseudo($_POST['Email']))
	Header('Location: connexion.php?err=1');
else
{
	$user = getInfosUsersByEmail($_POST['Email']);
	$user['NomMembre'] = htmlspecialchars($user['NomMembre']);
	$user['PrenomMembre'] = htmlspecialchars($user['PrenomMembre']);
	$user['IdMembre'] = htmlspecialchars($user['IdMembre']);
	$user['Admin'] = htmlspecialchars($user['Admin']);
	if(sha1($_POST['Mdp']) != $user['Mdp'])
		Header('Location: connexion.php?err=2');
	else
	{
		$_SESSION['session_id'] = $user['IdMembre'];
		$_SESSION['session_password'] = $user['Mdp'];
		$page_title = 'Bonjour ' .$user['PrenomMembre']. ' ' . $user['NomMembre'] . ' !';
		include_once("view/validerConnexion.php");
	}
}

