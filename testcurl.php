<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://yandex.ru/');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");

$out = curl_exec($ch);
curl_close($ch);

echo $out;


if (strlen($out) > 0) {
echo ' - <font color="green">успешно!</font>';
} else {
echo ' - <font color="red">ошибка!</font>';
}

