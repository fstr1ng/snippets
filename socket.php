<?php

$redis_socket = 'unix:///home/mfedoseev/tmp/redis.sock';
$memcached_socket = 'unix:///home/mfedoseev/tmp/memcached.sock';

function connect_eba($socket) {
    echo 'Socket: ' . $socket . '<br>';

    $connection = stream_socket_client($socket,  $errno, $errstr, 30);
    
    if ($connection) {
        echo 'Success!<br>';
    }
    else {
        echo 'Connection fail :( <br>';
        echo $errno . '<br>' . $errstr . '<br>';
    }

    echo '####################################<br><br>';

}

connect_eba($redis_socket);
connect_eba($memcached_socket);

