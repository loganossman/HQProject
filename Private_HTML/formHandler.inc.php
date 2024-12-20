<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["pass"];

    try {
        require_once "db.inc.php";
        $query = "INSERT INTO administrator (username, password) VALUES (?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$username, $password]);

        $pdo = null;
        $stmt = null;

        console.log($username . " " . $password);

        sleep(5);

        header("Location: ../Public_HTML/HQLogin.html");

        die();

    } catch (PDOException $e) {
        die("Query Failerd: ". $e->getMessage());
    }
}
else{
    header("Location: ../Public_HTML/HQLogin.html");
}