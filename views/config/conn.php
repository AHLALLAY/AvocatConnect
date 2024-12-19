<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'AvocatConnect';
    try {
        $dbh = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        die("<script>alert('connexion réussie')</script>");
    } catch (PDOException $e) {
        die("<script>alert('connexion refusée')</script>");
    }
?>