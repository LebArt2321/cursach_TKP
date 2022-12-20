<?php

  $mysql = new mysqli('localhost', 'root', '', 'vilyl_shop');

  $id = $_COOKIE["id"];

  $result = $mysql->query("SELECT * FROM `user` WHERE `id` = '$id'");

  $profile = $result->fetch_assoc();

  $history = mysqli_query($mysql, "SELECT * FROM `history` WHERE `userId` = '$id'");

  $mysql->close();

  $name = $profile["name"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/scss/style.css" />
    <title>Профиль</title>
</head>
<body>
<div class="wrapper">
      <div class="wrapper__body">
        <div class="body__header">
          <a href="/pages/index.php" class="header__logo-button">
            <img src="/img/logo.png" alt="" />
          </a>
          <div class="header__logo">
            <img src="/img/vin.jpg" alt="" />
          </div>
          <div class="header__menu">
            <a href="#popup" class="header__lk popup_link">
              <img src="/img/urod.png" alt="" />
              <div class="lk">Профиль</div>
            </a>
            <div onclick="location.href='basket.php'" class="header__bucket">
              <img src="/img/bucket.png" alt="" />
              <div class="lk">Корзина</div>
            </div>
          </div>
          
        </div>
        <div class="body__item">
          <div class="item__header">
            Здравствуйте, <?php echo $name; ?>
          </div>
        </div>
        <div class="profile__history">
            <div class="history__header">
              История ваших покупок:
            </div>
            <div class="history__body">
              <?php
                while($userHistory = mysqli_fetch_assoc($history)) {
                  $mysql = new mysqli('localhost', 'root', '', 'vilyl_shop');
                  $vinylId = $userHistory["vinylId"];
                  $vinyl = $mysql->query("SELECT * FROM `vinyl` WHERE `id` = '$vinylId'");
                  $vinyl = $vinyl->fetch_assoc();
              ?>
                <div class="history__item">
                    <div class="item__name">
                      <?php echo $vinyl["name"]; ?>
                    </div>
                    <div class="history__img">
                  <img src="<?php echo $vinyl["img1"]; ?>" alt="">
                  </div>
                  <div class="history__price">
                  <?php echo $vinyl["price"]; ?> ₽
                  </div>
                </div>
                <?php };?>
            </div>
        </div>
        <form action="../php/exit.php">
            <button class="exit">Выйти из профиля</button>
          </form>
</div>
</body>
</html>