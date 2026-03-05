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
        'female' => 'Nữ'
    );
    $error = array();
    // full name 
    if (empty($_POST['fullname'])) {
        $error['fullname'] = 'vui lòng không để trống Ho va ten ! !';
    } else {
        $fullname = $_POST['fullname'];
    }


    // -------- 
    if (empty($_POST['gender'])) {
        $error['gender'] = 'vui lòng không để trống giới tính! ! !';
    } else {
        $gender = $_POST['gender'];
    }
    if (empty($error)) {
        echo " Ho va ten: {$fullname} <br>Giới tính : {$show_gender[$gender]} ";
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
    <title>CHỌN GIỚI TÍNH</title>
</head>

<body>
    <style>
        p.error {
            color: red;
        }
    </style>
    <h1>CHỌN GIỚI TÍNH</h1>
    <form action="" method="POST">
        <!-- ho ten  -->
        <label for="fullname">Họ và tên</label> <br>
        <input type="text" name="fullname" id="fullname" value="<?php if (!empty($fullname)) echo $fullname ?>">
        <?php if (!empty($error['fullname']))
            echo " <p class='error'> {$error['fullname']} </p>  " ?>
        <br>
        <br>
        <!-- //  -->
        <label for="gender">Gioi Tinh</label> <br> <br>
        <select name="gender" id="">
            <option value="">---Chon---</option>
            <option <?php if (!empty($gender) && $gender == 'male') echo "selected = 'selected' " ?> value="male">Nam</option>

            <option <?php if (!empty($gender) && $gender == 'female') echo "selected = 'selected' " ?> value="female">Nu</option>
        </select>
        <?php if (!empty($error['gender']))
            echo " <p class='error'> {$error['gender']} </p>  " ?>
        <br><br>
        <input type="submit" name="btn_reg" value="Register">
    </form>

</body>

</html>