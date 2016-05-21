<?php
	include_once($PROJECT_ROOT . "model/connectBdd.php");

	function aVote($idMembre, $idConfig)
	{
		global $bdd;

		$query = $bdd->prepare('SELECT COUNT(*) FROM Vote WHERE IdMembre = ? AND IdConfig = ?');
		$res = $query->execute($idMembre, $idConfig);

		if ($res == 0)
			return false;
		else
			return true;
	}

	function nbVoteByMembre($idMembre)
	{
		global $bdd;

		$query = $bdd->prepare('SELECT COUNT(*) FROM Vote WHERE IdMembre = ?');
		$res = $query->execute($idMembre);

		return $res;
	}

	function addVote($idConfig,$idSoiree)
	{
		global $bdd;

		$req = $bdd->prepare('INSERT INTO Vote VALUES (?, ?)');
		$req->execute(array($idConfig, $idSoiree));
	}
