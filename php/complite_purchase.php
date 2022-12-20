<?php
    $mysql = new mysqli('localhost', 'root', '', 'vilyl_shop');

    $id = $_COOKIE["id"];
    $ost = $colich["colich"];
    

    $result = $mysql->query("SELECT * FROM `purchase` WHERE `userId` = '$id'");

    while($userBusket = mysqli_fetch_assoc($result)) {
        $userId = $userBusket["userId"];
        $sneakerId = $userBusket["sneakerId"];
        $colich = $userBusket["colich"];
        $mysql->query("INSERT INTO `history` (userId, sneakerId, colich) VALUES ($userId, $sneakerId, $colich)");
        echo ($ost);
    }

    $mysql->query("DELETE FROM `purchase`");

    $mysql->close();

    header("Location: /pages/profile.php");


    
?>