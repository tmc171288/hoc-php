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
        // hạ cờ 
        $error['username'] = 'khong duoc de trong truong Username';
    } else {
        $username = $_POST['username'];
    }
    if (empty($_POST['password'])) {
        $error['password'] = 'khong duoc de trong truong Password';
    } else {
        $password = $_POST['password'];
    }
}
// kết luận 
if (empty($error)) {
    //  nếu $errỏr không có lỗi 
    echo "Username : {$username} <br> Password : {$password}";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nhap du lieu rong </title>
</head>

<body>
    <style>
        p.error {
            color: red;
        }
    </style>
    <h1>Dang nhap</h1>
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"> <br>
        <p class="error"><?php if (!empty($error['username'])) echo $error['username']; ?></p>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"> <br>
        <p class="error"> <?php if (!empty($error['password'])) echo $error['password']; ?></p> <br>
        <input type="submit" name="btn_login" value="Login">
    </form>
</body>

</html>