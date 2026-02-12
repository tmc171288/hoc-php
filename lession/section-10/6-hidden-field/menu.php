<?php

echo "xin chao";


// <?php

// function show_array($data)
// {
//     if (is_array($data)) {
//         echo "<pre>";
//         print_r($data);
//         echo "</pre>";
//     }
// };

// if (isset($_POST['btn_login'])) {
//     $info_user = array(
//         'username' => 'admin',
//         'password' => 'admin123'
//     );

//     $error = array(); // Cờ hiệu 
//     if (empty($_POST['username'])) {
//         $error['username'] = "khong de trong ten dang nhap";
//     } else {
//         $username = $_POST['username'];
//     };
//     if (empty($_POST['password'])) {
//         $error['password'] = "khong de trong ten dang nhap";
//     } else {
//         $password = $_POST['password'];
//     };

//     // $username = $_POST['username'];
//     // $password = $_POST['password'];
//     // B1 : Kiểm tra dữ liệu 
//     // B2 : Gán dữ liệu 
//     // B3 : Kiểm tra login 
//     // B4 : Xử lý Login 
//     // ---- Chuyển hướng : cart.php 
//     // ---- Thông báo : lỗi đăng nhập 



//     if (empty($error)) {
//         if (($username == $info_user['username']) && ($password == $info_user['password'])) {
//             $redirect_to = $_POST['redirect_to'];

//             header("Location:{$redirect_to}");
//         } else {
//             $error['login'] = "ten dang nhapj hoac mat khau khong dung";
//         };
//     };
//     if (!empty($error)) {
//         show_array($error);
//     }
// }



?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hidden field</title>
</head>

<body>
    <h1>Hidden field </h1>
    <form action="" method="POST">
        <label for="username">Username :</label>
        <input type="text" id="username" name="username"> <br><br>
        <label for="password">Password :</label>
        <input type="password" id="password" name="password"> <br><br>
        <input type="hidden" name="redirect_to" value="menu.php">
        <input type="submit" value="Login" name="btn_login">

    </form>
</body>

</html> -->