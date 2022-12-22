<?php
session_start();
$cap = substr(str_shuffle("01234567890abcdefghijklmnopqrstuvwxyz"), 0, 6); // string akan diacak sebanyak 6 karakter 0-9 dan a-z
$_SESSION['captha_p'] = $cap;
$_SESSION['captha_pA'] = $cap;

$gambar = imagecreate(60,20); //ukuran gambar
$wrn = imagecolorallocate($gambar,0,0,0); // warna kotak
$wrt = imagecolorallocate($gambar,255,255,255); // warna tulisan
imagefilledrectangle($gambar,0,0,50,20,$wrn); //background
imagestring($gambar,10,3,3,$cap,$wrt); //layer atas tulisan
header('content-type: image/jpg');
imagejpeg($gambar); 
imagedestroy($gambar);

?>
