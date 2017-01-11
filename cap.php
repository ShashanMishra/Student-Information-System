<?php
session_start();
$rnd=rand(10000,99999);
$_SESSION["cap"]=$rnd;
$im = imagecreatetruecolor(50, 24);
$bg = imagecolorallocate($im, 22, 86, 165); //background color blue
$fg = imagecolorallocate($im, 255, 255, 255);//text color white
imagefill($im, 0, 0, $bg);
imagestring($im, 5, rand(1,5), 5,  $rnd, $fg);
$r=rand(100,200);
imageline($im,  rand(1,10), 0, $r,  rand(1,100), $fg);
imageline($im,  rand(1,10), 10,$r+40, rand(1,100), $fg);
header("Cache-Control: no-cache, must-revalidate");
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>