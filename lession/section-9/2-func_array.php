<!-- 
- array_key_exists  : tìm key có trong mảng không 
- array_merge : nối 1 mảng 
- count   : đếm số phần tử của mảng 
- in_array 
- is_array
- array_values
- array_search  
-->

<?php
// --------------array_key_exists ----------- 

// $search_array = array('a' => 1, 'b' => 4);

// if (array_key_exists('a', $search_array)) {
//     echo " The '1' element is in array ";
// }
// echo " khong co trong mang";
// echo "<br>---------------------------------<br>"

// --------------array_merge ----------- 
// $array1 = array(1, 2);
// $array2 = array(3, 5);

// $result = array_merge($array1, $array2);

// print_r($result);

// $array1 = array(1, 2, 4, 6, 8);

// echo count($array1);

// --------------count ----------- 

// $array = array(1, 2, 5, 6, 7, 8, 9);

// echo count($array);

// --------------in_array ----------- 


// $array = array(1, 2, 5, 6, 7, 8, 9);

// echo in_array(1, $array);

// --------------is_array ----------- 
$my_value = 5;
$array = array(1, 2, 5, 6, 7, 8, 9);
echo is_array($array);




function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

show_array($array);

?>