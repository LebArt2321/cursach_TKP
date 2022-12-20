<?php
    $id = $_POST["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $colich = $_POST["colich"];

    $mysql = new mysqli('localhost', 'root', '', 'vilyl_shop');

    $mysql->query("UPDATE `vinyl` SET `price` = '$price' WHERE `id` = '$id'");

    $mysql->close();

    header("Location: /pages/admin.php");

    //`name` = $name, `price` = $price, size36` = $size36 , `size37` = $size37, `size38` = $size38, `size39` = $size39, `size40` = $size40, `size41` = $size41, `size42` = $size42, `size43` = $size43, `size44` = $size44
?>