<?php

function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}


// show_array($_SERVER);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "Xin chao : {$username} -- {$password}";
}

show_array($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Dang nhap</title>
</head>

<body>
    <h1>Dang Nhap</h1>
    <form action="" method="POST">
        <label for="username">Username :</label>
        <input type="text" id="username" name="username"> <br><br>
        <label for="password">Password :</label>
        <input type="password" id="password" name="password"> <br><br>

        <input type="submit" value="Login" name="btn_login">

    </form>

</body>

</html>