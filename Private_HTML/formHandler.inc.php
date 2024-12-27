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
    $folder = '';
    if($dropdown == "Hand Made"){
        $folder = '../Assets/NewHandMade/'.$artimage;
    } elseif($dropdown == "Digital"){
        $folder = '../Assets/NewDigitalArt/'.$artimage;
    } else{
        die("Both are wrong");
    }
    


    try {
        require_once "db.inc.php";
        $query = "INSERT INTO pieces (artimage, name, description, medium, size, date) VALUES (?, ?, ?, ?, ?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$artimage, $name, $description, $medium, $size, $date]);

        $pdo = null;
        $stmt = null;

        if(move_uploaded_file($artImageTemp, $folder)){
            header("Location: ../Public_HTML/HQUpload.html");
        }
        else{
            die("Whoopsie Doopsie, no file included!");
        }
        
        die();

    } catch (PDOException $e) {
        die("Query Failerd: ". $e->getMessage());
    }
}
else{
    header("Location: ../Public_HTML/HQLogin.html");
}