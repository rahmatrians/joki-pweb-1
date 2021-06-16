<?php

$user   = 'root';
$pass   = '';
$host   = 'localhost';
$database   = 'curriculum vitae';

$conx = new mysqli($host, $user, $pass, $database);

if (!$conx) {
    echo "can't connect to database";
}
