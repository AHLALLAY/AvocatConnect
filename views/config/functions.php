<?php
function checkUser($email, $table){
    global $conn;
    $query = "SELECT email FROM $table WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$email]);
    return $stmt->fetch();
}

?>