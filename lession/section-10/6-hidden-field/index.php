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
    $info_user = array(
        'username' => 'admin',
        'password' => 'admin123',
    );

    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "ten dang nhap khong duoc de trong";
    } else {
        $username = $_POST['username'];
    };

    if (empty($_POST['password'])) {
        $error['password'] = "mat khau khong duoc de trong";
    } else {
        $password = $_POST['password'];
    };

    // kiem tra user name va mat khau 
    if (empty($error)) {
        if (($username == $info_user['username']) && ($password == $info_user['password'])) {
            $redirect_to = $_POST['redirect_to'];
            // echo $redirect_to;
            header("Location:{$redirect_to}");
        } else {
            $error['login'] = "Ten dang nhapj hoacj mat khau khog dung";
        };
    };
    if (!empty($error)) {
        show_array($error);
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
        Username: <input type="text" name="username"> <br><br>
        Password: <input type="password" name="password"> <br><br>
        <input type="hidden" name="redirect_to" value="menu.php">
        <input type="submit" value="Login" name="btn_login">

    </form>
</body>

</html>