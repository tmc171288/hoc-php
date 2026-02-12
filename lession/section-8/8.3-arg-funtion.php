<?php
// function check_even($n)
// {
//     if ($n % 2 == 0) {
//         echo " {$n} la  so chan ";
//     }
// }
// check_even(10);
// echo "<br>";

// function show_array($data)
// {
//     if (is_array($data)) {
//         echo "<pre>";
//         print_r($data);
//         echo "</pre>";
//     }
// }

// function sum_multi_number()
// {

//     $list_args = func_get_args();

//     show_array($list_args);
//     $t = 0;
//     foreach ($list_args as $value) {

//         $t += $value;
//     }
//     echo $t;
// }


// sum_multi_number(1, 9, 19);


$list_args = array(9, 12, 15);

function sum_multi_number($list_args)
{
    if (is_array($list_args)) {
        $t = 0;
        foreach ($list_args as $value) {
            $t += $value;
        }
        echo $t;
    }
};
sum_multi_number($list_args);


function create_input_text($name, $value, $option = array())
{
    $name = func_get_arg(0);
    $value = func_get_arg(1);
    $option = func_get_arg(2);

    if (!empty($option)) {
        $id = $option['id'];
        $class = $option['class'];
    }

    $input_html = "<input type='text' 
    name = '{$name}' 
    value = '{$value}' 
    id = '{$id}' 
    class = '{$class}' >";

    echo "Ho va ten {$input_html}";
};

create_input_text('username', '', $option = array(
    'id' => 'username',
    'class' => 'input_form',
),);
