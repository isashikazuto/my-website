<?php
require_once "./db/connect.php";
require_once "./db/controller.php";

if(!isset($_GET["id"])){
    header("Location:Employeeinformation.php");
}else{
    $id = $_GET["id"];
    $result = $controller -> delete($id);
    if($result){
        header("Location:Employeeinformation.php");
    }
    
}


?>