<?php 
$logFileName = 'test.txt';
$logContent = "Тестовый скрипт".PHP_EOL;

$date = new DateTime();
$date = $date->format("y:m:d h:i:s");

if ($handle = fopen($logFileName, 'a')) 
{
  fwrite($handle, $date);
  fwrite($handle, PHP_EOL);
  fwrite($handle, $logContent);
  fwrite($handle, PHP_EOL);
  fwrite($handle, $cmdWindows);
  fwrite($handle, PHP_EOL);
  fwrite($handle, $params);
  fwrite($handle, PHP_EOL);
 }
 fclose($handle);
