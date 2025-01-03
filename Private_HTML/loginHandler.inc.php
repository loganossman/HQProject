<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["pass"];

    try {
        require_once "db.inc.php";
        $query = "SELECT * FROM administrator WHERE username = :username;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $string = "";

        if($result == true){
            $string = "Location: ../Public_HTML/HQUpload.html";
        }
        else{
            $string = "Location: ../Public_HTML/HQLogin.html";
        }

        $pdo = null;
        $stmt = null;

        header($string);

        die();

    } catch (PDOException $e) {
        die("Query Failerd: ". $e->getMessage());
    }
}
else{
    header("Location: ../Public_HTML/HQLogin.html");
}