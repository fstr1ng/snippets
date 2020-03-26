<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <title>main</title>
</head>
<body>
<?php 


//$host1 = $_SERVER['REMOTE_ADDR'];
// = gethostbyaddr($host1);
//trbo25h.trbo.yandex.net

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo $hostname;

?>
</body>
</html>
