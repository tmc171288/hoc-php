<?php
$str_1 = "Xin chao ";
$str_2 =  "<strong>Michael</strong>  ";
$username = "dmn";

echo "str_1 = {$str_1}";
echo "<br>";
echo "str_2 = {$str_2}";
echo "<br>--------------<br>";

$noitifi = $str_1 . $str_2;

echo $noitifi;


$noitifi .= $username;


echo $noitifi;
