<?php
$memcache_obj = new Memcache;
 
    //Соединяемся с нашим сервером
    $memcache_obj->addServer('unix:///home/tvoyterem/tmp/memcached.sock', 0) or die('Could not connect');
 
    //Попытаемся получить объект с ключом our_var
    $var_key = @$memcache_obj->get('our_var');
 
    if(!empty($var_key))
    {
        //Если объект закэширован, выводим его значение
        echo $var_key;
    }
 
    else
    {
        $obj = "Данная строка записана в Memcache";
        //Если в кэше нет объекта с ключом our_var, создадим его
        //Объект our_var будет храниться 5 секунд и не будет сжат
        $memcache_obj->set('our_var', $obj, false, 5);
 
        //Выведем закэшированные данные
        echo $memcache_obj->get('our_var');
    }
 
//Получаем статус сервера    
$status = $memcache_obj->getStats();
//Использовано в мегабайтах
$MBUsed= (real)$status["bytes"]/(1024*1024);
//Размер сервера 
$MBSize=(real) $status["limit_maxbytes"]/(1024*1024); ?>

<br>Статистика Memcache:
<table border='1'>
   <tr><td>Версия Memcache сервера</td><td> <?=$status ["version"];?></td></tr>
   <tr><td>Время работы Memcache (в секундах) </td><td><?=$status ["uptime"];?></td></tr>
   <tr><td>Максимальный объем памяти для Memcache</td><td><?=$MBSize;?> Мб</td></tr>
   <tr><td>Используется памяти</td><td><? echo($status["bytes"]);?> Мб</td></tr>
   <tr><td>Используется памяти</td><td><? printf("%.2f",$MBUsed);?> байт</td></tr>
</table>

<? 
//Закрываем соединение с сервером Memcache
$memcache_obj->close();  
?>
