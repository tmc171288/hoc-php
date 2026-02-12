<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
$mod = $_GET['mod'];
$act = $_GET['act'];

echo "MOD : {$mod}  <br> ACT : {$act} <br> <br>";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lay thong tin tu url</title>
</head>

<body>

</body>

<a href="?mod=product&act=main">San pham</a>

</html>