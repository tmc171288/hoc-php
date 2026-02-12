<?php
$x = 2;
$y = 5;


// if ($x > 5 || $y > 6) {
//     echo "ok";
// } else {
//     echo "False";
// }


// if (!($x > 5)) {
//     echo " OK";
// }

function check_even($x)
{
    if ($x % 2 == 0) return true;
    return false;
}

if (!check_even(6)) {
    echo " day la so le";
} else {
    echo " day la so chan";
}
