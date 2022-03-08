<?php

include "database.php";


$porsesh_ha = $db->query("SELECT * FROM questions");
$pasokh_ha = $db->query("SELECT * FROM answers");




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

                    <button class="btn btn-warning p-3" type="button"> <a href="admin.php"> <span class="fas fa-user-circle text-black" > ورود کاربر / داشبورد</span> </a> </button>
                </form>

            </div>
        </div>
    </nav>

    <!-- جدول -->

    <div class="row mt-5">
        <div class="col bg-light">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">سوال ها</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">جواب ها</button>

                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <!-- دکمه سوال جدید -->

                    <div class="col-2 mt-3">
                        <!-- Button trigger modal -->
                        <button type="button" id="btn_add" class="btn btn-primary p-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            سوال جدید <i class="fas fa-plus"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">پیام جدید</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="new_questions.php">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">متن پرسش</label>
                                                <input type="text" name="question" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                            </div>




                                            <button type="submit" class="btn btn-primary mt-3">ذخیره</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- جدول سوال ها -->

                    <div class="table-responsive">
                        <table class="table list-table table-secondary table-nowrap align-middle table-borderless ">
                            <thead>
                            <tr>
                                <th scope="col" class="ps-4" style="width: 50px;">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck">
                                        <label class="form-check-label" for="contacusercheck"></label>
                                    </div>
                                </th>
                                <th scope="col" style="width: 50px;">#</th>
                                <th scope="col">متن سوال</th>

                                <th scope="col">پاسخ</th>


                                <th scope="col" style="width: 150px;">ویرایش</th>
                            </tr>
                            </thead>


                            <tbody>
                            <?php
                            foreach ($porsesh_ha as $porsesh) : ?>
                                <tr class=" mt-2">
                                    <th scope="row" class="ps-4">
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                            <label class="form-check-label" for="contacusercheck1"></label>
                                        </div>
                                    </th>
                                    <td>
                                        <?php echo $porsesh["id"];  ?>
                                    </td>
                                    <td>
                                        <?php echo $porsesh["text"];  ?>
                                    </td>

                                    <td>
                                        <!--  دکمه جواب جدید  -->
                                        <button type="button" id="btn_add" class="btn btn-success p-1" data-bs-toggle="modal" data-bs-target="#exampleModal11">
                                            جواب جدید <i class="fas fa-plus"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">پاسخ جدید</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <button id="btn_p" class="btn btn-success"  onclick="add_answers()" ><i class="fas fa-plus"></i></button>

                                                        <form method="post" action="new_questions.php">
                                                            <p>
                                                                متن پاسخ
                                                            </p>

                                                            <div class="mb-3" id="add">
                                                                <input type="text" name="answer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>



                                                            <button type="submit" class="btn btn-primary mt-3">ذخیره</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                    <td>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" class="px-2 text-primary" data-bs-original-title="Edit" aria-label="Edit"><i class="far fa-edit fa-lg "></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" class="px-2 text-danger" data-bs-original-title="Delete" aria-label="Delete"><i class="far fa-trash fa-lg "></i> </i></a>
                                            </li>

                                        </ul>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            </tbody>

                        </table>
                    </div>
                </div>

                <!-- جدول جواب ها -->

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">


                    <div class="table-responsive">
                        <table class="table list-table table-secondary table-nowrap align-middle table-borderless ">
                            <thead>
                            <tr>
                                <th scope="col" class="ps-4" style="width: 50px;">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck">
                                        <label class="form-check-label" for="contacusercheck"></label>
                                    </div>
                                </th>
                                <th scope="col" style="width: 50px;">#</th>
                                <th scope="col">متن پاسخ</th>
                                <th scope="col">پاسخ درست</th>
                                <th scope="col">ایدی سوال</th>


                                <th scope="col" style="width: 150px;">ویرایش</th>
                            </tr>
                            </thead>


                            <tbody>
                            <?php
                            foreach ($pasokh_ha as $pasokh) : ?>
                                <tr class=" mt-2">
                                    <th scope="row" class="ps-4">
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                            <label class="form-check-label" for="contacusercheck1"></label>
                                        </div>
                                    </th>
                                    <td>
                                        <?php echo $pasokh["id"];  ?>
                                    </td>
                                    <td>

                                        <?php echo $pasokh["text"];  ?>
                                    </td>
                                    <td>

                                        <?php

                                        if($pasokh["is_true"] == 1)
                                        {
                                            echo "درست";
                                        }
                                        else
                                        {
                                            echo "غلط";

                                        }

                                        ?>
                                    </td>

                                    <td>

                                        <?php echo $pasokh["question_id"];  ?>
                                    </td>

                                    <td>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" class="px-2 text-primary" data-bs-original-title="Edit" aria-label="Edit"><i class="far fa-edit fa-lg "></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" class="px-2 text-danger" data-bs-original-title="Delete" aria-label="Delete"><i class="far fa-trash fa-lg "></i> </i></a>
                                            </li>

                                        </ul>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            </tbody>

                        </table>
                    </div>

                </div>

            </div>
        </div>


    </div>


</div>

<script src="js/app.js" ></script>

<script src="js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

</body>

</html>