<?php
//  Tính tổng các số nguyên tố từ 2 -> $n ( $n >= 2 ) 
//  số nguyên tố là số chia hết cho 1 và chính nó 
//  gồm 1 , 3 , 5 , 7 , 11 

function check_prime($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    };
    return true;
}

// echo check_prime(5);

function total_prime($n)
{
    $t = 0;
    for ($i = 2; $i <= $n; $i++) {
        if (check_prime($i)) {
            $t += $i;

            echo "{$i} <br>";
        }
    }
    return $t;
}


echo "tong bang " . total_prime(5);



// function get_post_by_id($id)
// {
//     global  $list_post;
//     foreach ($list_post as $key => $item) {
//         if ($key == $id) return $list_post[$id];
//     }
//     return false;
// }

// $item = get_post_by_id(1);


// function show_array($data)
// {
//     if (is_array($data)) {
//         echo "<pre>";
//         print_r($data);
//         echo "</pre>";
//     }
// }