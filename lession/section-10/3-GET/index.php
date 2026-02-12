<?php
#GET DU LIEU TU URL

$mod = $_GET['mod'];
$act = $_GET['act'];
$id = $_GET['id'];


echo "{$mod} - {$act} - {$id}";


function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//     $q = $_GET['q'];

//     echo $q;
// }

// show_array($_SERVER);

if (isset($_GET['btn_search'])) {
    // show_array($_GET);
    $q = $_GET['q'];
    echo $q;
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Dang nhap</title>
</head>

<body>
    <h1>Search</h1>

    <a href="?mod=product&act=detail&id=1368">San pham</a>
    <form action="" method="GET">
        Tìm Kiếm : <input type="text" name="q">
        <input type="submit" name="btn_search" value="Search">

    </form>

</body>

</html>