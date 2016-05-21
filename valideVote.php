<?php

	include_once("model/vote.php");

	if (!empty($_POST))
		addVote($_POST["choixVote"], $_POST["idSoiree"]);

	Header('Location: soiree.php?id='.$_POST["idSoiree"]);

