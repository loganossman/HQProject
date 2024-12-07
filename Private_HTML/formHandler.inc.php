<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST("username");
    $password = $_POST("password");

    try {
        require_once "db.inc.php";
        $query = "INSERT INTO administrator (username, password) VALUES (?, ?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt->exec

    } catch (PDOException $e) {
        die("Query Failerd: ". $e->getMessage());
    }
}
else{
    header("Location: ../Public_HTML/HQLogin.html")
}