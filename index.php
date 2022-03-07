<?php


include "database.php";


$porsesh_table = $db->query("SELECT * FROM questions");
$total =  $porsesh_table->num_rows;

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
                <a class="navbar-brand" href="#">آزمونک </a>

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