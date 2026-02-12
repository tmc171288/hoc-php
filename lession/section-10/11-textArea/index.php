<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

if (isset($_POST['btn_add'])) {
    // show_array($_POST);

    if (empty($_POST['post_detail'])) {
        echo " Vui long them bai viet hoac Gops y cua khach hang";
    } else {
        $post_detail = $_POST['post_detail'];
        echo $post_detail;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Box </title>
</head>

<body>
    <h1>Text Area </h1>
    <form action="" method="POST">
        <label for="complain">Gop Y</label> <br> <br>
        <textarea name="post_detail" id="complain" cols="50" rows="10"></textarea>
        <br><br>
        <input type="submit" value="Them bai viet" name="btn_add">

    </form>
</body>

</html>