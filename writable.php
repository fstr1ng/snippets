<?php
$filename = 'style.css';
if (is_writable($filename)) {
    echo $filename . ' is writable';
} else {
    echo $filename . ' not writable';
}

