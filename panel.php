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

	include_once("view/panel.php");
