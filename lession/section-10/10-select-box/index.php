<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

if (isset($_POST['pay'])) {
    // show_array($_POST);
    if (empty($_POST['pay'])) {
        echo "can chon hinh thuc thanh thoan";
    } else {
        $pay = $_POST['pay'];
        echo $pay;
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
    <h1>Select box</h1>
    <form action="" method="POST">
        <label for="order">Chon hinh thuc thanh toan</label> <br> <br>
        <select name="pay" id="order">
            <option value="">---Chon---</option>
            <option value="cod">Thanh Toan Tai Nha</option>
            <option value="banking">Thanh toan truc tuyen</option>
        </select> <br><br>
        <input type="submit" value="dat hang" name="btn_order">

    </form>
</body>

</html>