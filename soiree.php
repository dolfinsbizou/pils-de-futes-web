<?php
include_once("model/sessions.php");
include_once("model/soiree.php");

if(isLogged() AND isset($_GET['idSoiree']))
{
	$idSoiree = $_GET['idSoiree'];
	if(!($data = getSoireeInfoById($idSoiree)))
	{
		header('Location: ./');
	}
}else {
	header('Location: ./');
	exit;
}
$data['NomSoiree'] = htmlspecialchars($data['NomSoiree']);
$data['DateSoiree'] = htmlspecialchars($data['DateSoiree']);

$page_title = "soiree " .$data['NomSoiree']. "";
include_once("view/soiree.php");
