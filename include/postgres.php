<?php 
    try {
        $pdo = new PDO("pgsql:host=localhost;port=5432;dbname=immo;", "postgres", "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
?>