 <?php
$socket = curl_init();
curl_setopt($socket, CURLOPT_URL, "https://ya.ru");
//curl_setopt($socket, CURLOPT_REFERER, "http://www.XXXXXXX.com");
//curl_setopt($socket, CURLOPT_POST, true);
//curl_setopt($socket, CURLOPT_USERAGENT, $agent);
//curl_setopt($socket, CURLOPT_POSTFIELDS, "form_logusername=XXXXX&form_logpassword=XXXXX");
//curl_setopt($socket, CURLOPT_COOKIESESSION, true);
//curl_setopt($socket, CURLOPT_COOKIEJAR, "cookies.txt");
//curl_setopt($socket, CURLOPT_COOKIEFILE, "cookies.txt");
//curl_setopt($socket, CURLOPT_SSLVERSION, 0);

$data = curl_exec($socket);
curl_close($socket); 

echo($data);
