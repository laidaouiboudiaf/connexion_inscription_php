<?php
$host= "localhost";
$Username = "root";
$pass = "";
$db_name = "utilisateurs";
try {
    $database = new PDO("mysql:host=$host;dbname=$db_name", $Username, $pass);
} catch (PDOException $e) {
    echo "Connection failed : " . $e->getMessage();
}



