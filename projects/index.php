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

    echo " Xin chao : <br>
    {$username} - {$password}";
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>

<body>
    <h1>Dang Nhap</h1>
    <form action="" method="POST">
        <label for="username">Username :</label> <br>
        <input type="text" name="username" id="username"><br><br>
        <label for="password">Password :</label> <br>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" name="btn_login" value="Login">

    </form>


</body>

</html>