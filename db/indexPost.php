<?php

use util\XDef;

require_once __DIR__ . '/../DTO/DTOLead.php';
require_once __DIR__ . '/../util/XDef.php';
require_once __DIR__ . '/../inc/dotenv.inc.php';

$pdo = new PDO("mysql:host={$_ENV["DB_HOST"]};dbname={$_ENV["DB_DATABASE"]}", $_ENV["DB_USER"], $_ENV["DB_PASS"]);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = ('INSERT INTO leads(first_name, last_name, phone, email, content, department_id)
    VALUES (:firstName, :lastName, :phone, :email, :content, :departmentId)');

$stmt = $pdo->prepare($query);

$stmt->bindValue(':firstName', XDef::parseInput($_POST['first_name']));
$stmt->bindValue(':lastName', XDef::parseInput($_POST['last_name']));
$stmt->bindValue(':phone', XDef::parseInput($_POST['phone']));
$stmt->bindValue(':email', XDef::parseInput($_POST['email']));
$stmt->bindValue(':content', XDef::parseInput($_POST['content']));
$stmt->bindValue(':departmentId', XDef::parseInput($_POST['department_id']));

$stmt->execute();