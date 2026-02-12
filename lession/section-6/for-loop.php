<?php

// t = 0 + 2 + 4 + 6 + 8 + 10
$t = 0;


for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $t += $i;
    }
}
echo "KET QUA = {$t}";
