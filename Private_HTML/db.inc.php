<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=test", "hannahWeb", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

session_start();
?>