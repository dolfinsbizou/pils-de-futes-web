<?php
include_once("model/sessions.php");

print_r($_SESSION);

$page_title = "Accueil";
include_once("view/index.php");
