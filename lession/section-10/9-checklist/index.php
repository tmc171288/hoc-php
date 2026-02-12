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
    if (!empty($_POST['cat'])) {
        #cach 1 
        foreach ($_POST['cat'] as $item) {
            echo $item . '<br>';
        }
        #cach 2 
        $list_cat = implode(",", $_POST['cat']);
        echo $list_cat;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckList </title>
</head>

<body>
    <h1>Checkbox</h1>
    <form action="" method="POST">
        <input type="checkbox" name="cat[]" value="1" id="cat_1">
        <label for="cat_1"> The Thao</label> <br><br>
        <input type="checkbox" name="cat[]" value="2" id="cat_2">
        <label for="cat_2"> Van Hoa</label> <br><br>
        <input type="submit" value="Them Bai Viet" name="btn_add">

    </form>
</body>

</html>