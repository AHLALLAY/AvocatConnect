<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'AvocatConnect';
    
    try {
        $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<script>alert('connexion réussie')</script>";
        
    } catch (PDOException $e) {
        error_log("Erreur de connexion : " . $e->getMessage());
        echo "<script>alert('connexion refusée')</script>";
    }

?>
