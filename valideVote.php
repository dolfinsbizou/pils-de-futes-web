<?php

	include_once("model/vote.php");

	if (!empty($_POST))
		addVote($_POST["idSoiree"], $_POST["choixVote"]);
	
	Header('Location: panel.php');

