<?php
include_once("model/sessions.php");
include_once("model/membres.php");
if(isLogged())
{
	$data = getUserInfoById(getUserId());
	$uid = getUserId();
}else {
	header('Location: ./');
	exit;
}

$data['NomMembre'] = htmlspecialchars($data['NomMembre']);
$data['PrenomMembre'] = htmlspecialchars($data['PrenomMembre']);
$data['Email'] = htmlentities($data['Email']);

$page_title = 'Profil de '.$data['PrenomMembre'].' ' . $data['NomMembre'];
include_once("view/profil.php");
