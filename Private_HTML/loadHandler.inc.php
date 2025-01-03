
<?php
try {
        require_once "db.inc.php";
        $query = "SELECT artimage, name, description, medium, size, date FROM pieces;";

        $stmt = $pdo->prepare($query);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $string = "";

        if($result == true){
            $string = "Location: ../Public_HTML/HQAbout.html";
        }
        else{
            $string = "Location: ../Public_HTML/HQLogin.html";
        }

        $pdo = null;
        $stmt = null;

    } catch (PDOException $e) {
        die("Query Failerd: ". $e->getMessage());
    }