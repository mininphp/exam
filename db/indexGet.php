<?php

require_once __DIR__ . '/../inc/dotenv.inc.php';

try {

    echo $_ENV["DB_HOST"] . "\n";

} catch (\Throwable $th) { echo "Minin: Error: " . $th->getMessage(); }


