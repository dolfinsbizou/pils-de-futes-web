<?php
include_once("model/sessions.php");
$user = getInfosUsersById($_SESSION['session_id']);

$page_title = "Accueil";
include_once("view/index.php");
