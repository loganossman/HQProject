<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $artimage = $_FILES["artimage"]['name'];
    $artImageTemp = $_FILES['artimage']['tmp_name'];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $medium = $_POST["medium"];
    $size = $_POST["size"];
    $date = $_POST["date"];
    $dropdown = $_POST["style"];
    $folder = '../Assets/TestFolder/'.$artimage;


    try {
        require_once "db.inc.php";
        $query = "INSERT INTO pieces (artimage, name, description, medium, size, date) VALUES (?, ?, ?, ?, ?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$artimage, $name, $description, $medium, $size, $date]);

        $pdo = null;
        $stmt = null;

        if(move_uploaded_file($artImageTemp, $folder)){
            if($dropdown = "Hand Made"){
                header("Location: ../Public_HTML/HQLogin.html");
            } elseif($dropdown = "Digital"){
                header("Location: ../Public_HTML/HQAbout.html");
            } else{
                die("Both are wrong");
            }
        }
        else{
            die("".count($_FILES));
        }
        

        die();

    } catch (PDOException $e) {
        die("Query Failerd: ". $e->getMessage());
    }
}
else{
    header("Location: ../Public_HTML/HQLogin.html");
}