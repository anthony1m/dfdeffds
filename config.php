<?php

$db_user= "root";
$db_pass= "password";
$db_name = "batte5";

try {
    $db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}