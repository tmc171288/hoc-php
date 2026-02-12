<!-- Hiện thị danh mục theo đa cấp 
Giáo Dục 
-- Khuyến học 
-- Du Học
Thể Thao 
-- Châu Âu 
-- Châu Á 

-->

<?php
$list_post_cat = array(
    1 => array(
        'cat_id' => 1,
        'cat_post' => 'Giao Duc',
        'level' => 0,
    ),
    2 => array(
        'cat_id' => 2,
        'cat_post' => 'Khuyen hoc',
        'level' => 1,
    ),
    3 => array(
        'cat_id' => 3,
        'cat_post' => 'Du hoc',
        'level' => 1,
    ),
    4 => array(
        'cat_id' => 4,
        'cat_post' => 'The Thao',
        'level' => 0,
    ),
    5 => array(
        'cat_id' => 5,
        'cat_post' => 'Chau au',
        'level' => 1,
    ),
    6 => array(
        'cat_id' => 6,
        'cat_post' => 'Ngoai hang anh',
        'level' => 2,
    ),
    7 => array(
        'cat_id' => 7,
        'cat_post' => 'Chau a',
        'level' => 1,
    ),
    8 => array(
        'cat_id' => 8,
        'cat_post' => 'J League',
        'level' => 2,
    ),
);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Muc Website</title>
</head>

<body>
    <h1>Danh Muc WebSite</h1>
    <?php if (is_array($list_post_cat) && !empty($list_post_cat)) {
    ?>
        <table>
            <thead>
                <tr>
                    <td>Stt</td>
                    <td>Danh Muc</td>
                </tr>
            </thead>

            <?php
            $temp = 0;
            foreach ($list_post_cat as $item) {
                $temp++;
            ?>
                <tbody>
                    <tr>
                        <td> <?php echo $temp;  ?></td>
                        <td> <?php echo str_repeat('**', $item['level']) . $item['cat_post'] ?> </td>
                    </tr>
                </tbody>
            <?php  } ?>
        </table>

    <?php } else {
        echo 'Khong co danh sach trang web';
    ?>

    <?php  } ?>
</body>

</html>