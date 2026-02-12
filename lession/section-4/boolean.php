<?php


function checkEven($n)
{

    if ($n % 2 == 0) {
        return true;
    }
    return false;
}

$check = checkEven(4);

echo $check;
