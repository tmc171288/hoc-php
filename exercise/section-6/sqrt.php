<?php
$a = 3;
$b = 1;
$c = -2;

// ax^2 +bx +c = 0 

if ($a != 0) {
    $delta = $b * $b - (4 * $a * $c);
    if ($delta < 0) {
        echo "Phuong trinhf vo nghiem";
    } elseif ($delta == 0) {
        $x = (-$b) / 2 * $a;
        echo "pt co nghiem kep x = {$x} ";
    } else {
        $x1 = (-$b + sqrt($delta)) / 2 * $a;
        $x2 =  (-$b - sqrt($delta)) / 2 * $a;

        echo "pt co 2 nghiem x1 = {$x1} ; x2 = {$x2}";
    }
} else {
    echo " phuong trinh tro ve phuong trinh bac nhat x = - {$c}/{$b}";
}
