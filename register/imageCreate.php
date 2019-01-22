<?php
session_start();
$random_number=rand(0,9).'$'.rand(12,22);
$im = @imagecreate(140,40) or die("Cannot Initialize new GD image stream, this will NOT work!");
$background_color = imagecolorallocate($im, 999, 999, 999);
$text_color = imagecolorallocate($im, 000,000, 000);
$_SESSION['cap'] = $random_number;
for ($i=0;$i<strlen($random_number);$i++)
{
    $display = substr($random_number,$i,1);
    $x = ($i*40) + rand(3,6);
    $y = rand($i,20);
    imagestring($im, 5, $x, $y, $display, $text_color);
}

for ($i=1;$i<300;$i++)
{
    $cor_x = rand(1,300);
    $cor_y = rand(1,100);
    imagesetpixel($im,$cor_x,$cor_y,$text_color);
}

imagepng($im);

?>