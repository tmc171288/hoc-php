<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

if (isset($_POST['btn_reg'])) {
    $show_gender = array(
        'male' => 'Nam',
        'female' => 'Nu'
    );
    show_array($_POST);
    if (empty($_POST['gender'])) {
        echo " ban chua chon gioi tinh";
    } else {
        $gender = $_POST['gender'];
        echo $show_gender[$gender];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hidden field</title>
</head>

<body>
    <h1>Dang nhap</h1>
    <form action="" method="POST">
        <input type="radio" name="gender" value="male" id="male" checked="checked">
        <label for="male">Nam</label><br>
        <input type="radio" name="gender" value="female" id="female">
        <label for="female">Nu</label><br>

        <input type="submit" value="Register" name="btn_reg">

    </form>
</body>

</html>