<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=diary;charset=utf8mb4', 'root', 'fr9lC_3OtgM-z3so', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}
catch (PDOException $e) {
    echo 'A problem occured with the database connection...';
    die();
}
