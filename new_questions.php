<?php
include "database.php";

// new questions

$porsesh = $_POST["question"];


$db->query("INSERT INTO questions(text) VALUES('$porsesh')");


header("location:admin.php");

?>