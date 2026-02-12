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

    // show_array($_POST);
    if (isset($_POST['rules'])) {
        $rules = $_POST['rules'];
        echo $rules;
    } else {

        echo 'Ban can dong y dieu khoan';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox </title>
</head>

<body>
    <h1>Checkbox</h1>
    <form action="" method="POST">
        <p style="width: 400px; height: 100px ; overflow-y:scroll">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti asperiores unde mollitia quos amet ea nostrum debitis consequuntur, repellendus ex provident voluptatibus tenetur a, nemo ab magni necessitatibus inventore quia? Ut molestiae delectus officia reiciendis illum repellendus autem accusamus aspernatur exercitationem ad quia architecto modi eveniet et, nam consectetur quam magni. Et maxime, quaerat officia dolorum ratione, suscipit voluptate deserunt earum eius enim unde sed, fugiat quod culpa amet accusantium! Impedit perspiciatis, cupiditate dolor in eos blanditiis cum quidem mollitia? Voluptates porro veritatis eligendi numquam facere repellat perferendis iure unde, corporis minus cumque maxime. Reiciendis doloremque dolorum quibusdam doloribus commodi.</p>
        <input type="checkbox" name="rules" value="yes" id="rules">
        <label for="rules">Dong y</label> <br><br>

        <input type="submit" value="Register" name="btn_reg">

    </form>
</body>

</html>