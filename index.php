<?php
$arr = array(
"0" => "http://www.google.com",
"1" => "http://www.Facebook.com",
"2" => "http://www.youtube.com",
"3" => "http://www.yahoo.com.tw",
);

$a = mt_rand(0,3);
$url = $arr[$a];
header( "Location: $url" );
?>
