<?php

include 'config.php';

$fullname   = $_POST['fullname'];
$information   = $_POST['information'];
$education   = $_POST['education'];
$experience   = $_POST['experience'];
$skill   = $_POST['skill'];


$execute = $conx->query("INSERT INTO mahasiswa VALUES(NULL, '$fullname', '$information', '$education', '$experience', '$skill')");

if (!$execute) {
    header('location: failed.php');
}
header('location: index.php');
