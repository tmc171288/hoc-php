<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
if (isset($_POST['btn_login'])) {
    $error = array(); // phất cờ 
    if (empty($_POST['username'])) {
        $error['username'] = 'vui lòng điền thông tin đăng nhập ! ! !';
    } else {
        $username = $_POST['username'];
    }
    if (empty($_POST['password'])) {
        $error['password'] = 'vui lòng điền thông tin mật khẩu! ! !';
    } else {
        $password = $_POST['password'];
    }

    if (empty($error)) {
        echo " Username : {$username} <br> Password : {$password}";
    }
    // else {
    //     show_array($error);
    // }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM DANG KY </title>
</head>

<body>
    <style>
        p.error {
            color: red;
        }
    </style>
    <h1>Form dang ky</h1>
    <form action="" method="POST">
        <label for="username">UserName</label><br>
        <input type="text" id="username" name="username"><br>
        <p class="error"> <?php if (!empty($error['username'])) echo $error['username']    ?></p>
        <label for="password">Mat khau</label><br>
        <input type="password" id="password" name="password"><br><br>
        <p class="error"> <?php if (!empty($error['password'])) echo $error['password']    ?></p>

        <input type="submit" name="btn_login" value="Login">
    </form>

</body>

</html>