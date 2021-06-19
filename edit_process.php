<?php

include 'config.php';

$id         = 1;
$fullname   = $_POST['fullname'];
$information   = $_POST['information'];
$education   = $_POST['education'];
$experience   = $_POST['experience'];
$skill   = $_POST['skill'];


#edu
$data_edu = null;
$i = 0;
foreach ($education as $edu) {
    $data_edu .= $edu;
    if ($i == 3) {
        $i = 0;
        $data_edu .= ".";
    } else {
        $data_edu .= ",";
        $i++;
    }
}


#exp
$data_exp = null;
$i = 0;
foreach ($experience as $exp) {
    $data_exp .= $exp;
    if ($i == 3) {
        $i = 0;
        $data_exp .= ".";
    } else {
        $data_exp .= ",";
        $i++;
    }
}


#exp
$data_skill = null;
$i = 0;
foreach ($skill as $skill) {
    $data_skill .= $skill;
    $data_skill .= ",";
    $i++;
}

var_dump($data_skill);

function removeLastChar($string)
{

    $string = substr($string, 0, -1);
    return $string;
}

var_dump($data_edu = removeLastChar($data_edu));
var_dump($data_exp = removeLastChar($data_exp));
var_dump($data_skill = removeLastChar($data_skill));

$execute = $conx->query("UPDATE mahasiswa SET full_name = '$fullname', about = '$information', education = '$data_edu', experience = '$data_exp', skill = '$data_skill' WHERE id_mhs = '$id'");

if (!$execute) {
    header('location: failed.php');
}
header('location: index.php');
