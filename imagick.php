<?php
/*$image = new Imagick();
$image->setResolution(300,300);
$image->readImage("Monaco_Linux.ttf");
$image->setImageUnits(imagick::RESOLUTION_PIXELSPERINCH);
$draw = new ImagickDraw();
$draw->setFillColor("white");
$draw->setFont("arialbd.ttf");
$draw->setFontSize(80);
$image->annotateImage($draw, 100, 100, 0, "123456789 Тест Test");    
$image->annotateImage($draw, 100, 200, 0, "Потому что это все не так работает!");    
$image->annotateImage($draw, 100, 300, 0, "That's why it is not working properly!");    
$image->writeImages("blank1.jpg", true);*/

$image = new Imagick();
$image->setResolution(300,300);
$image->readImage("blank.jpg");
$image->setImageUnits(imagick::RESOLUTION_PIXELSPERINCH);

$draw = new ImagickDraw();
$draw->setFillColor("black");
$draw->setFont("arialbd.ttf");
$draw->setFontSize(72);

$image->annotateImage($draw, 100, 100, 0, "123  вппраопроар");
$image->annotateImage($draw, 100, 200, 0, "dkl");
$image->annotateImage($draw, 10, 45, 0, 'The quick brown fox jumps over the lazy dog');
$image->annotateImage($draw, 100, 300, 0, "That's why it is not working properly!");

$image->writeImages("blank1.jpg", true);

?>    
