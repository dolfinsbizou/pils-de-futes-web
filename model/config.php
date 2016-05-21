<?php
	include_once($PROJECT_ROOT . "model/connectBdd.php");

	function addConfig($idSoiree, $commentaire)
	{
		global $bdd;
		
		$req = $bdd->prepare('INSERT INTO Configuration (IdSoiree, Commentaire) VALUES (:idSoiree, :commentaire)');
		$req->execute(array(
				'idSoiree' => $idSoiree,
				'commentaire' => $commentaire));
	}

	function addVote($idConfig)
	{
		global $bdd

		$query = $bdd->prepare('UPDATE Configuration SET nbVote  = nbVote + 1 WHERE IdConfig = :idConfig');
		$query->execute(array(
				'idConfig' => $idConfig));
	}

	function getNbVote($idConfig)
	{
		global $bdd;

		$query = $bdd->prepare('SELECT nbVote FROM Configuration WHERE IdConfig = :idConfig');
		$query->execute(array(
				'idConfig' => $idConfig));
	}