<?php
	include_once("model/sessions.php");
	include_once("model/membres.php");

	if (!isLogged())
		Header("Location: ./");

	if (!isAdmin($_SESSION['session_id']))
	{
		Header("Location: ./");



	$page_title = "ajouterConfig";
	include_once("view/ajouterConfig.php");
