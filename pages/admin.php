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

    $vinyl = $mysql->query("SELECT * FROM `vinyl`");

    while($vinyls = mysqli_fetch_assoc($vinyl)){
        ?>
        <form action="/php/change.php" method="POST">
        <div class="admin__item">
        <div class="name"><?php echo $vinyls["name"];?></div>
        <input name="id" type="text" value = "<?php echo $vinyls["id"];?>" style="display: none;">
        <div>Цена</div>
        <input name="price" type="text" value = "<?php echo $vinyls["price"];?>">
        <div>Кол-во </div>
        <input name="colich" type="text" value = "<?php echo $vinyls["colich"];?>">
       
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