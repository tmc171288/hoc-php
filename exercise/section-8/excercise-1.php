<!-- xay dung ham kiem tra so nguyen chan
check_even() 

-->
<?php
function check_even($n)
{
    if ($n % 2 == 0) return true;
    return false;
}

if (check_even(500))
    // khi return true hay false --- phai được gán lại hoặc ở trong 1 biểu thức điều kiện 
    echo "day la so chan";
else
    echo "day la so le ";





?>