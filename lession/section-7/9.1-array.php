<?php
$list_user = array(
    1 => array(
        'id' => 1000,
        'fullname' => "thaiminhcam",
        'email' =>  "minhcam806@gmail.com"
    ),
    2 => array(
        'id' => 1001,
        'fullname' => "ari091025",
        'email' =>  "minhcam8026@gmail.com"
    ),
    3 => array(
        'id' => 1020,
        'fullname' => "thaiminh22cam",
        'email' =>  "minhcam802226@gmail.com"
    ),
    4 => array(
        'id' => 1036,
        'fullname' => "thaimi222nhcam",
        'email' =>  "minhc222am806@gmail.com"
    ),
    5 => array(
        'id' => 10388,
        'fullname' => "thaimi22112122nhcam",
        'email' =>  "minhc22222am806@gmail.com"
    ),
);
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach dang ky </title>
</head>

<body>
    <h1> Danh Sach dang ky 8x</h1>
    <?php if (!empty($list_user)) { ?>
        <table border="3">
            <thead>
                <tr>
                    <td width="50">Stt</td>
                    <td width="70">Id</td>
                    <td width="120">Ho va ten</td>
                    <td width="170">Email</td>
                </tr>
            </thead>
            <?php
            $temp = 0;
            foreach ($list_user as $user) {
                // show_array($user);
                $temp++;
            ?>
                <tbody>

                    <tr>
                        <td> <?php echo $temp ?> </td>
                        <td> <?php echo $user['id'] ?></td>
                        <td> <?php echo $user['fullname'] ?></td>
                        <td> <?php echo $user['email'] ?></td>
                    </tr>
                </tbody>
            <?php  } ?>
        </table>

    <?php } else {  ?>
        <p style="color:teal ; font-weight : bold ; font-size : 1.5em"> Không Có Danh Sách Đăng Ký </p>

    <?php } ?>
</body>

</html>