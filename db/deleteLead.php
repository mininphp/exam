<?php

require_once __DIR__ . '/../inc/dotenv.inc.php';

$pdo = new PDO("mysql:host={$_ENV["DB_HOST"]};dbname={$_ENV["DB_DATABASE"]}", $_ENV["DB_USER"], $_ENV["DB_PASS"]);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    print_r($id);

    $query = $pdo->prepare("DELETE FROM leads WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT); // TODO: replace with bindValue
    $query->execute();
}






