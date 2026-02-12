<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}


// # strlen
//  strlen : dem so thu tu 

$my_st = "cam cam";


echo strlen($my_st);

echo "<br>";


// # ucfirst : in hoa chu cai dau tien 
//  #ucword : in hoa moi chu cai dau 


$my_str = "thai minh cam";

echo ucfirst($my_str);
echo "<br>";
$my_str = "thai minh cam";

echo ucwords($my_str) . "<br>";

// #str_repeat ; 

echo str_repeat("--", 50);

// #md5 ==> ham ma hoa ; 

// $my_str = "thai minh cam";

// echo md5($my_str) . "<br>";

// #join ====tao thanh 1 chuoi 


$list_id = array(1, 2, 4, 5, 6, 7, 8);

echo join('<br>', $list_id) . "<br>";;

//  #implode => gion ham join 

// #explode => tu chuoi tach ra mang 

// $pizza = "piece1 piece2 piece3 piece4 piece4";

// $pieces = explode(" ", $pizza);

// show_array($pieces);

// echo $pieces[2];

//htmlspecialchars : tranh xam pham du lieu 

echo htmlspecialchars("<script >  alert('ok')</script>");

$new = htmlspecialchars("<a href=''>Test</a>", ENT_QUOTES);



echo $new;
