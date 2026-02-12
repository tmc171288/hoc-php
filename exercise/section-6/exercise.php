<?php
// <!-- bai 1  --> tinh tong cac so tu 1 - n ( n>=2)
// $t = 0;
// $n = 6;
// for ($i = 2; $i <= $n; $i++) {
//     if ($i % 2 == 0) {
//         $t += $i;
//     }
// }
// echo $t; 



//  bt 2 :tinh tong nghich dao cac so chia het cho 3 tu 3 den n ( n >=3)
//  t = 1/3 + 1/6 + 1/9 ....+1/n (n>=3)

// $t = 0;
// $n = 6;
// for ($i = 3; $i <= $n; $i++) {
//     if ($i % 3 == 0) {
//         $t += (1 / $i);
//     }
// }
// echo $t; 



//bt 3 : t3 = 1/2 + 2/3 + 3/4 + .... + n/n+1 (n>=1);


$t = 0;
$n = 1;
for ($i = 1; $i <= $n; $i++) {

    $t += $i / ($i + 1);
}
echo $t;
