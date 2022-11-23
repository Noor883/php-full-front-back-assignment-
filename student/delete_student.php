<?php
require './functions_student.php';


$id = $_GET['id'];

$sql = "DELETE FROM student WHERE id=$id";
$result = mysqli_query(connect(), $sql);

header('Location: ./');