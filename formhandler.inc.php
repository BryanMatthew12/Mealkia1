<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass= $_POST["pass"];
    $phone = $_POST["phone"];
    
    try {
        require_once "dbh.inc.php";
        
        $query = "INSERT INTO customers(Name, Email, PASSWORD, Phone) 
        VALUES (?, ?, ?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$name, $email, $pass, $phone]);

        $pdo = null;
        $stmt = null;

        header("Location: ../SE%20fix%20gol/main.php");

        die();
    } catch (PDOException $e) {
        die("QUery Failed: " . $e->getMessage());
    }
}
else{
    header("Location: ../SE%20fix%20gol/main.php");
}