<?php

$host = 'localhost';
$user = 'a0292562_Rentcar';
$password = 'a59e1987';
$name = 'a0292562_Rentcar';

function get_data($link, $db_table) {
    $query = 'SELECT * FROM `' . $db_table . '`';
    $result = mysqli_query($link, $query);
    $rows = mysqli_fetch_all($result);
    return($rows);
    }

$link = mysqli_connect($host, $user, $password, $name); 
print_r(get_data($link, 'cars'));
mysqli_close($link);
