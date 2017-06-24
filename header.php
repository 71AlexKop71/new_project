<?php

// автозагрузка классов
function __autoload($name)
{
    require_once($name . '.php');
}

if($_GET["id"]){
    $id = 1;
}
else{
    $id = $_GET["id"];
}
$content = new \classes\Ccontent($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php ?></title>

    <!-- CSS -->
    <link href="style/bootstrap.min.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">

</head>
<?php
