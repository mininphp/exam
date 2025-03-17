<?php

try {
    require_once __DIR__ . '/../inc/dotenv.inc.php';
    $pdo = new PDO("mysql:host={$_ENV["DB_HOST"]};dbname={$_ENV["DB_DATABASE"]}", $_ENV["DB_USER"], $_ENV["DB_PASS"]);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        print_r($id);

        $query = "DELETE FROM leads WHERE id= :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        echo "Record deleted successfully!";
    }
} catch (PDOException $e) {
    die("Minin: Database error: " . $e->getMessage());
}






