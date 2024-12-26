<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $artimage = $_FILES["artimage"]["name"];
    $artImageTemp = $_FILES["artImage"]["tmp_name"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $medium = $_POST["medium"];
    $size = $_POST["size"];
    $date = $_POST["date"];
    $folder = '../Assets/TestFolder/'.$artImage;


    try {
        require_once "db.inc.php";
        $query = "INSERT INTO pieces (artimage, name, description, medium, size, date) VALUES (?, ?, ?, ?, ?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$artimage, $name, $description, $medium, $size, $date]);

        $pdo = null;
        $stmt = null;

        if(move_uploaded_file($artImageTemp, $folder)){
            header("Location: ../Public_HTML/HQAbout.html");
        }
        else{
            die("Failed". $folder);
        }
        

        die();

    } catch (PDOException $e) {
        die("Query Failerd: ". $e->getMessage());
    }
}
else{
    header("Location: ../Public_HTML/HQLogin.html");
}