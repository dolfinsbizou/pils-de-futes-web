<?php
$sgbdr='mysql';
$bddHost='intensifi.es';
$bddBase='pils-de-futes';
$bddUser='pils-de-futes';
$bddPassword='iut-pdf-24h-39bd';

try
{
			$bdd = new PDO($sgbdr . ':host=' . $bddHost . ';dbname=' . $bddBase . ';charset=utf8', $bddUser, $bddPassword);
}
catch(Exception $e)
{	
			die($e->getMessage());
}
