<?php
$list_prime = array(2, 3, 5, 6);

$list_users = array(
    1 => array(
        'id' => 1000,
        'fullname' => 'Phan van cuong',
        'email' => 'phanvancuong@gmail.com',
    ),
    2 => array(
        'id' => 2000,
        'fullname' => 'thai minh cam',
        'email' => 'phanvancuong@gmail.com',
    ),
    3 => array(
        'id' => 3678,
        'fullname' => 'Huynh nhu ',
        'email' => 'phanvancuong@gmail.com',
    ),
);

function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
// B1 : chuan bj mảng mảng
// b2 : tạo cấu trúc Html mẫu 
// B3 : duyệt mảng 
// B4 : Đổ dữ liệu


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DO DU LIEU</title>
</head>

<body>
    <h1> Danh sang so nguyen to </h1>
    <?php if (!empty($list_users)) { ?>
        <table border="1">
            <thead>
                <tr>
                    <td align="center" width="50">Stt</td>
                    <td align="center" width="50"> Id </td>
                    <td align="center" width="200">Ho va ten </td>
                    <td align="center" width="200"> Email </td>
                </tr>
            </thead>
            <tbody>
                <?php

                $temp = 0;
                foreach ($list_users as $user) {
                    $temp++;
                    // show_array($user);

                ?>
                    <tr>
                        <td> <?php echo $temp; ?></td>
                        <td><?php echo $user['id'] ?></td>
                        <td><?php echo $user['fullname'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                    </tr>

                <?php

                }
                ?>
            </tbody>
        </table>
    <?php
    } else { ?>
        <p> khong co danh sach</p>

    <?php }
    ?>
</body>

</html>