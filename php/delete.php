<?php
    $delete = $_POST["delete"];

    $mysql = new mysqli('localhost', 'root', '', 'vilyl_shop');

    $mysql->query("DELETE FROM `purchase` WHERE id = $delete");

    $mysql->close();

    header("Location: /pages/basket.php");
?>