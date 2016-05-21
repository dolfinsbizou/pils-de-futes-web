<?php
$pdo = new PDO('mysql:dbname=pils-de-futes;host=intensifi.es', 'pils-de-futes', 'iut-pdf-24h-39bd');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$req = $pdo->prepare('SELECT * FROM lieux');
$req->execute([]);
$lieux = $req->fetchAll();

echo json_encode($lieux);