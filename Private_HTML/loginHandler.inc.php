<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["pass"];

    try {
        require_once "db.inc.php";
        $query = "SELECT * FROM administrator WHERE username = :username AND password = :password;";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$username, $password]);

        $string = "";

        if(is_null($stmt) == false){
            $string = "Location: ../Public_HTML/HQAbout.html";
        }
        else{
            $string = "Location: ../Public_HTML/HQLogin.html";
        }

        $pdo = null;
        $stmt = null;

        header("Location: ../Public_HTML/HQLogin.html");

        die();

    } catch (PDOException $e) {
        die("Query Failerd: ". $e->getMessage());
    }
}
else{
    header("Location: ../Public_HTML/HQLogin.html");
}