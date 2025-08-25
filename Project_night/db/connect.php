<?php
ini_set('display_error', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL);

$host = "localhost";
$username = "root";
$password = "";
$dbname = "employee_night";

$dsn = "mysql:host=$host;dbname=$dbname;chartset = utf8";
try{
    $pdo = new PDO($dsn, $username, $password);
    // echo "finish";
}catch(PDOException $e){
    echo $e -> getMessage();
}


require_once "./db/controller.php";
require_once "./db/user.php";
$controller = new Controller($pdo);
$user = new User($pdo);

$user -> insertUser('admin', '0000');
?>