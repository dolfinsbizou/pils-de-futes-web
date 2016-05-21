<?php
include_once("model/sessions.php");
include_once("model/soiree.php");

if(isLogged())
{
	$idSoiree = $_GET['idSoiree'];
	$data = getSoireeInfoById($idSoiree,getUserID());
}else {
	header('Location: ./');
	exit;
}

$data['NomSoiree'] = htmlspecialchars($data['NomSoiree']);
$data['DateSoiree'] = htmlspecialchars($data['DateSoiree']);

$page_title = "soiree " .$data['NomSoiree']. "";
include_once("view/soiree.php");
