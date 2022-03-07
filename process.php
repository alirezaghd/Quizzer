<?php

$user_score = 0;

include "database.php";

$user_choice_id = $_POST["answer"];
$q_id =$_POST["question_id"];


$correct_choice = $db->query("SELECT * FROM answers WHERE question_id = $q_id AND is_true = 1 ")->fetch_assoc();
$correct_choice_id = $correct_choice["id"];


if($user_choice_id == $correct_choice_id)
{
    $user_score++;
    echo "barikala";
}
else
{
    echo "dari eshtebah mizani dadach";
}
$q_id++;
header("location:questions.php?x=$q_id");
?>

