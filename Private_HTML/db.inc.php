<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=hqsql", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

session_start();
?>