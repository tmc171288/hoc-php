<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

show_array($_POST);

$username = $_POST['username'];
$password = $_POST['password'];

echo "{$username} - {$password}";
