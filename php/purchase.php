<?php

    if($user = $_COOKIE["id"]){
        $id = $_POST["id"];
        $colich = $_POST["colich"];

        $mysql = new mysqli('localhost', 'root', '', 'vilyl_shop');

        $mysql->query("INSERT INTO `purchase` (userId, vinylId, colich) VALUES ($user, $id, $colich)");

        $mysql->close();

        header("Location: /pages/basket.php");
    }
    else{
        header("Location: /pages/index.php");
    }
?>
