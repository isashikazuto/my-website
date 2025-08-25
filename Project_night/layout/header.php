<?php
require_once "./layout/session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg bg-body" data-bs-theme = "dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./Employeeinformation.php">ข้อมูลทั้งหมด</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./addfrom.php">บันทึกข้อมูล</a>
        </li>
        <?php if(!isset($_SESSION["userid"])){ ?>
        <li class="nav-item">
          <a class="nav-link" href="./loginFrom.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./SingUpFrom.php">Sing Up</a>
        </li>
        <?php }else{ ?>
          
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            สวัสดี <?php echo $_SESSION["username"]; ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Logout.php">ออกกระบบ</a></li>
          </ul>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>