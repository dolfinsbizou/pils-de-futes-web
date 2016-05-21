<?php

	include_once($PROJECT_ROOT . "model/connectBdd.php");
	include_once("model/vote.php");


	if (!empty($_POST))
		if (!aVote(getUserID(), $_POST["idConfig"]))
			addVote($_POST["idSoiree"], $_POST["choixVote"]);

	Header('Location: soiree.php?id='.$_POST["idSoiree"]);

