<!-- 2 / xuat 1 mang so nguyen chan tu 1 mang so nguyen cho truoc  -->

<?php

function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

$list_number = array(2, 4, 5, 6, 7, 8);

$list_even = array();

if (!empty($list_number) && is_array($list_number)) {
    foreach ($list_number as $value) {
        if ($value % 2 == 0)
            $list_even[] = $value;
    }
}
show_array($list_even);





?>