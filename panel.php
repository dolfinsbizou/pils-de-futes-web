<?php
	include_once("model/sessions.php");
	include_once("model/membres.php");

	if (!isLogged())
	{
		Header("Location: ./");
		exit(0);
	}

	else if (!isAdmin(getUserID()))
	{
		Header("Location: ./");
		exit(0);
	}
	$user = getInfosUsersById($_SESSION['session_id']);
	$page_title = "Panel Admin";
	include_once("view/panel.php");
