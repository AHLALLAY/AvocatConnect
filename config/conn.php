<?php
$host = "localhost";
$db_name = "avocatconnect";
$username = "root";
$password = "";

$msg = "";

try{
    $conn = new PDO("mysql:dbname=$db_name;host=$host", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $msg = "+";
}catch(PDOException $e){
    $msg = "-";
}

?>