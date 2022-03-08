<?php
session_start();

?>

<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>وب سایت آزمونک</title>
</head>

<body>

<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">آزمونک</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">خانه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">تعرفه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">درباره ما</a>
                </li>

            </ul>
            <form class="d-flex mt-2">

                <button class="btn btn-warning p-3" type="button"> <a href="admin.php"> <span class="fas fa-user-circle text-black" > ورود کاربر / داشبورد</span> </a> </button>
            </form>

        </div>
    </div>
</nav>
    <div class="d-flex justify-content-center">
        <div class="card  mt-3 mb-3 w-25 d-flex align-items-center" >
            <img src="img/checkmark.png" class="card-img-top w-75" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    امتیاز شما برابر است با :
                </h5>
                <p class="card-text">    <?php

                    echo  $_SESSION["User_Score"];
                    ?></p>
                <p class="card-text"><small class="text-muted">زمان سپری شده :</small></p>
            </div>
        </div>
    </div>



</div>
</body>
</html>
