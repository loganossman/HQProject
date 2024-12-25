<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $artimage = $_POST["artimage"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $medium = $_POST["medium"];
    $size = $_POST["size"];
    $date = $_POST["date"];


    try {
        require_once "db.inc.php";
        $query = "INSERT INTO pieces (artimage, name, description, medium, size, date) VALUES (?, ?, ?, ?, ?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$artimage, $name, $description, $medium, $size, $date]);

        $pdo = null;
        $stmt = null;

        header("Location: ../Public_HTML/HQAbout.html");

        die();

    } catch (PDOException $e) {
        die("Query Failerd: ". $e->getMessage());
    }
}
else{
    header("Location: ../Public_HTML/HQLogin.html");
}