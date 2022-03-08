<?php

include "database.php";

session_start();

$user_choice_id = $_POST["answer"];
$q_id =$_POST["question_id"];

$porsesh_table = $db->query("SELECT * FROM questions");
$total =  $porsesh_table->num_rows;


$correct_choice = $db->query("SELECT * FROM answers WHERE question_id = $q_id AND is_true = 1 ")->fetch_assoc();
$correct_choice_id = $correct_choice["id"];


if($user_choice_id == $correct_choice_id)
{
    $_SESSION["User_Score"]++;
    echo "barik";

    //echo "barikala";
}
else
{

    $_SESSION["User_Score"]--;
    echo "khak";
    //echo "dari eshtebah mizani dadach";
}
$q_id++;

if($q_id > $total )
{
    header("location:final.php");
}
else
{
    header("location:questions.php?x=$q_id");

}


// new questions

$porsesh = $_POST["answer"];


$db->query("INSERT INTO specs(text ) VALUES('$porsesh')");
header("location:admin.php");
?>

