<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/scss/style.css" />
    <title>ADMIN</title>
</head>
<body>
    <div class="admin__wrapper">
    <div class="admin__header">
    Виниловые пластинки:
    </div>
    <?php
    $mysql = new mysqli('localhost', 'root', '', 'vilyl_shop');

    $sneaker = $mysql->query("SELECT * FROM `sneaker`");

    while($sneakers = mysqli_fetch_assoc($sneaker)){
        ?>
        <form action="/php/change.php" method="POST">
        <div class="admin__item">
        <div class="name"><?php echo $sneakers["name"];?></div>
        <input name="id" type="text" value = "<?php echo $sneakers["id"];?>" style="display: none;">
        <div>Цена</div>
        <input name="price" type="text" value = "<?php echo $sneakers["price"];?>">
        <div>Кол-во </div>
        <input name="colich" type="text" value = "<?php echo $sneakers["colich"];?>">
       
        </div>
        <button action="submit">Изменить данные</button>
        </form>

    <?php
    }
    ?>
    </div>
<form action="../php/exit.php">
            <button class="exit">Выйти из профиля</button>
          </form>
</body>
</html>