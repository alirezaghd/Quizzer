<?php


include "database.php";
session_start();

$porsesh_table = $db->query("SELECT * FROM questions");
$total =  $porsesh_table->num_rows;

$_SESSION["User_Score"] = 0;

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
        <!-- منو -->
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

                        <button class="btn btn-warning p-3" type="button"> <a href="admin.php"> <span class="fas fa-user-circle text-black" >  ورود کاربر / داشبورد</span> </a> </button>
                    </form>

                </div>
            </div>
        </nav>

        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                     آزمونک  
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">به آزمونک خوش آمدی</h5>
                        <p class="card-text">
                            تعداد سوالات این آزمون 
                            <?php echo $total ?>
                            تا می باشد
                        </p>
                        <p class="card-text">
                           زمان آزمون : 
                           <?php echo $total / 2 ?>
                           دقیقه
                        </p>
                        <a href="questions.php?x=1" class="btn btn-primary">
                            بزن بریم
                        </a>
                    </div>
                </div>
            </div>
        </div>












    </div>





    <script src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

</body>

</html>