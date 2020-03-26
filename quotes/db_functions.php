<?php

function db_connect($host, $user, $password, $name) {
    $link = mysqli_connect($host, $user, $password, $name);
    return $link;
}

function get_quotes_count($link) { 
    $query = 'SELECT * FROM `quotes`'; 
    $result = mysqli_query($link, $query); 
    $count = mysqli_num_rows($result); 
    return $count;
}

function get_quotes_count_good($link) { 
    $query = 'SELECT COUNT(*) AS `count` FROM `quotes`'; 
    $result = mysqli_query($link, $query); 
    $count = mysqli_fetch_assoc($result); 
    return $count['count'];
}
function get_quote($link, $id) {
    $query = 'SELECT * FROM `quotes` WHERE id = ' . $id;
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['quote'];
}

function db_connection_close ($link) {
    mysqli_close($link);
}


