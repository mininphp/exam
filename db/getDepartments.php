<?php

require_once __DIR__ . '/../inc/dotenv.inc.php';

$pdo = new PDO("mysql:host={$_ENV["DB_HOST"]};dbname={$_ENV["DB_DATABASE"]}", $_ENV["DB_USER"], $_ENV["DB_PASS"]);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = $pdo->prepare("SELECT * FROM departments");
$query->execute();
$data = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);




