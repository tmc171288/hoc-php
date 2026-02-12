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
        'password' => 'admin123'
    );
    // show_array($_POST);
    $error = array(); //Cắm cờ hiệu
    if (empty($_POST['username'])) {
        $error['username'] = "ten dang nhap khong duoc de trong";
        $erroruser = $error['username'];
        // echo $erroruser . '<br>';
        // echo $username;
    } else {
        $username = $_POST['username'];
    }
    if (empty($_POST['password'])) {
        $error['password'] = "mat khau khong duoc de trong";
        $errorpass = $error['password'];
        // echo $errorpass . '<br>';
    } else {
        $password = $_POST['password'];
    }

    if (empty($error)) {
        if ($username == $info_user['username'] & $password == $info_user['password']) {
            echo " dang nhap thanh cong";
        } else {
            $error['btn_login']  = " ten dang nhap hoac mat khau khong dung";
        }
    }
    if (!empty($error)) {
        echo $erroruser . '<br>';
        echo $errorpass;


        // show_array($error);
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thong tin dang ky</title>
</head>

<body>

    <h1>Thon tin ten dang nhap va mat khau </h1>
    <form action="" method="POST">
        Username: <input type="text" name="username"> <br><br>
        Password: <input type="password" name="password"> <br><br>

        <input type="submit" name="btn_login" value="Dang Ky">

    </form>

</body>

</html>