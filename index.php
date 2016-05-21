<?php
include_once("model/sessions.php");
include_once('model/soiree.php');
if(!isLogged())
{
	header('location: connexion.php');
	exit(0);
}

$user = getInfosUsersById($_SESSION['session_id']);
$soireeVote = getSoireeVote();
$soireeFinVote = getSoiree();

$page_title = "Accueil";
include_once("view/index.php");
