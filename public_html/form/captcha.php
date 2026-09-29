<?php
  session_start();
  $random = mt_rand(100000, 999999); // md5(rand());
  $captcha_code = $random; // substr($random, 0, 6);
  
  $_SESSION["captcha_code"] = $captcha_code;
  
  $target_layer = imagecreatetruecolor(70,30);
  $captcha_background = imagecolorallocate($target_layer, 255, 160, 119);
  imagefill($target_layer,0,0,$captcha_background);
  $captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0);
  imagestring($target_layer, 5, 5, 5, $captcha_code, $captcha_text_color);
  
  header("Content-type: image/jpeg");
  imagejpeg($target_layer);
?>