<?php
include_once("model/sessions.php");
if(!isLogged())
{
	header('location: connexion.php');
	exit(0);
}

$user = getInfosUsersById($_SESSION['session_id']);

$page_title = "Accueil";
include_once("view/index.php");
