<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

try {

    echo $_ENV["DB_HOST"] . "\n";

} catch (\Throwable $th) { echo "Minin: Error: " . $th->getMessage(); }


