<?php

include "database.php";

$number = $_GET["x"];

$porsesh_t = $db->query("SELECT * FROM questions WHERE id = $number"); // یک جدولی که یک رکورد داره
$porsesh = $porsesh_t->fetch_assoc(); // یک رکورد

$pasokhha = $db->query("SELECT * FROM answers WHERE question_id = $number");


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
                    <div class="card-header bg-secondary">
                        سوال
                        <?php echo $porsesh["id"]; ?>


                        از
                        <?php echo $total; ?>
                    </div>
                    <div class="card-body">

                        <p class="card-text fw-bold fs-4">
                            <?php echo $porsesh["text"]; ?>
                        </p>

                        <form method="post" action="process.php">
                            <input type="hidden" value="<?php echo  $porsesh["id"]?>" name="question_id">
                            <?php foreach ($pasokhha as $pasokh) : ?>
                                <div class="form-check">
                                    <input class="form-check-input border-danger" type="radio" value="<?php echo  $pasokh["id"]?>" name="answer" id="flexRadioDefault1">
                                    <label class="form-check-label fs-5" for="flexRadioDefault1">
                                        <?php echo $pasokh["text"]; ?>
                                    </label>

                                </div>


                            <?php endforeach; ?>



                            <button type="submit"  class="btn btn-primary mt-3">بعدی</button>

                        </form>


                    </div>
                </div>
            </div>
        </div>












    </div>





    <script src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

</body>

</html>