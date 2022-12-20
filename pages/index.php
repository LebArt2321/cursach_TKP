<?php
  include "../php/item_db.php";
  $nameId1 = $itemId1["name"];
  $priceId1 = $itemId1["price"];
  $img1Id1 = $itemId1["img1"];

  $nameId2 = $itemId2["name"];
  $priceId2 = $itemId2["price"];
  $img1Id2 = $itemId2["img1"];

  $nameId3 = $itemId3["name"];
  $priceId3 = $itemId3["price"];
  $img1Id3 = $itemId3["img1"];

  $nameId4 = $itemId4["name"];
  $priceId4 = $itemId4["price"];
  $img1Id4 = $itemId4["img1"];

  $nameId5 = $itemId5["name"];
  $priceId5 = $itemId5["price"];
  $img1Id5 = $itemId5["img1"];

  $nameId6 = $itemId6["name"];
  $priceId6 = $itemId6["price"];
  $img1Id6 = $itemId6["img1"];

  $nameId7 = $itemId7["name"];
  $priceId7 = $itemId7["price"];
  $img1Id7 = $itemId7["img1"];

  $nameId8 = $itemId8["name"];
  $priceId8 = $itemId8["price"];
  $img1Id8 = $itemId8["img1"];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/scss/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Vinni's Vinyl</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="wrapper__body">
        <div class="body__header">
          <div class="header__logo-button">
            <img src="/img/logo.png" alt="" />
          </div>
          <div class="header__logo">
            <img src="/img/vin.jpg" alt="" />
          </div>
          <div class="header__menu">
            <a <?php
              if($_COOKIE["id"]){
                echo 'onclick=', '"location.href=', "'profile.php'", ';"';
              }
              else{
                echo "href='#popup'";
              }
            ?> class="header__lk popup_link">
              <img src="/img/urod.png" alt="" />
              <div class="lk">Профиль</div>
            </a>
            <div onclick="location.href='basket.php'" class="header__bucket">
              <img src="/img/bucket.png" alt="" />
              <div class="lk">Корзина</div>
            </div>
          </div>
        </div>
        <div class="body__search">
          <input
            class="search"
            id="search"
            type="text"
            placeholder="Поиск по сайту"
          />
          
        </div>
        <div class="body__catalog">
          <div class="catalog__header">Виниловые пластинки</div>
          <div class="catalog__body">
            <div class="catalog__filters">
              <div class="filter__type filter sex">
                <div class="filter__header">
                    Жанр
                </div>
                <div class="filter__body">
                    <label class="filter__checkbox" for="ROCK">
                        <input data-sex="ROCK" checked="checked" type="checkbox" id="ROCK" />Рок
                    </label>
                      <label class="filter__checkbox" for="POP">
                        <input data-sex="POP" checked="checked" type="checkbox" id="POP" />Поп
                    </label>
                    <label class="filter__checkbox" for="RAP">
                        <input data-sex="RAP" checked="checked" type="checkbox" id="RAP" />Рэп
                    </label>
                </div>
              </div>
              <div class="filters__type filter brand">
                <div class="filter__header">Исполнитель</div>
                <div class="filter__body">
                  <label class="filter__checkbox"  for="michael_jackson">
                    <input data-brand="michael_jackson" checked="checked"  type="checkbox" id="michael_jackson" />Michael Jackson
                </label>
                  <label class="filter__checkbox" for="zemfira">
                    <input data-brand="zemfira" checked="checked"  type="checkbox" id="zemfira" />Земфира
                </label>
                  <label class="filter__checkbox" for="tyler">
                    <input data-brand="tyler" checked="checked" type="checkbox" id="tyler" />Tyler, The Creator
                </label>
                  <label class="filter__checkbox" for="AC/DC">
                    <input data-brand="AC/DC" checked="checked" type="checkbox" id="AC/DC" />AC/DC
                </label>
                  <label class="filter__checkbox" for="QUEEN">
                    <input data-brand="QUEEN" checked="checked" type="checkbox" id="QUEEN" />QUEEN
                </label>
                  <label class="filter__checkbox" for="ABBA">
                    <input data-brand="ABBA" checked="checked" type="checkbox" id="ABBA" />ABBA
                </label>
                </div>
              </div>
            </div>
            <div class="catalog__vinyls">
                <form action="../pages/item.php" method="POST">
                    <button action="submit" class="vinyls__item zemfira ROCK checked">
                      <input type="text" name="id" value="1" style="display:none">
                        <div class="item__img"><img src="<?php echo $img1Id1; ?>" alt=""></div>
                        <div class="item__header"><?php echo $nameId1; ?></div>
                        <div class="item__price"><?php echo $priceId1; ?> ₽</div>
                    </button>
                </form>
                <form action="../pages/item.php" method="POST">
                  <button action="submit" class="vinyls__item zemfira ROCK checked">
                    <input type="text" name="id" value="2" style="display:none">
                    <div class="item__img"><img src="<?php echo $img1Id2; ?>" alt=""></div>
                    <div class="item__header"><?php echo $nameId2; ?></div>
                    <div class="item__price"><?php echo $priceId2; ?> ₽</div>
                  </button>
                </form>
                <form action="../pages/item.php" method="POST">
                  <button action="submit" class="vinyls__item michael_jackson POP checked">
                  <input type="text" name="id" value="3" style="display:none">
                    <div class="item__img"><img src="<?php echo $img1Id3; ?>" alt=""></div>
                    <div class="item__header"><?php echo $nameId3; ?></div>
                    <div class="item__price"><?php echo $priceId3; ?> ₽</div>
                </button>
                </form>
                <form action="../pages/item.php" method="POST">
                <button action="submit" class="vinyls__item tyler RAP checked">
                <input type="text" name="id" value="4" style="display:none">
                    <div class="item__img"><img src="<?php echo $img1Id4; ?>" alt=""></div>
                    <div class="item__header"><?php echo $nameId4; ?></div>
                    <div class="item__price"><?php echo $priceId4; ?> ₽</div>
                </button>
                </form>
                <form action="../pages/item.php" method="POST">
                <button action="submit" class="vinyls__item tyler RAP checked">
                <input type="text" name="id" value="5" style="display:none">
                    <div class="item__img"><img src="<?php echo $img1Id5; ?>" alt=""></div>
                    <div class="item__header"><?php echo $nameId5; ?></div>
                    <div class="item__price"><?php echo $priceId5; ?> ₽</div>
                </button>
                </form>
                <form action="../pages/item.php" method="POST">
                <button action="submit" class="vinyls__item AC/DC ROCK checked">
                <input type="text" name="id" value="6" style="display:none">
                    <div class="item__img"><img src="<?php echo $img1Id6; ?>" alt=""></div>
                    <div class="item__header"><?php echo $nameId6; ?></div>
                    <div class="item__price"><?php echo $priceId6; ?> ₽</div>
                </button>
                </form>
                <form action="../pages/item.php" method="POST">
                <button action="submit" class="vinyls__item QUEEN ROCK checked">
                <input type="text" name="id" value="7" style="display:none">
                    <div class="item__img"><img src="<?php echo $img1Id7; ?>" alt=""></div>
                    <div class="item__header"><?php echo $nameId7; ?></div>
                    <div class="item__price"><?php echo $priceId7; ?> ₽</div>
                </button>
                </form>
                <form action="../pages/item.php" method="POST">
                <button action="submit" class="vinyls__item ABBA POP checked">
                <input type="text" name="id" value="8" style="display:none">
                    <div class="item__img"><img src="<?php echo $img1Id8; ?>" alt=""></div>
                    <div class="item__header"><?php echo $nameId8; ?></div>
                    <div class="item__price"><?php echo $priceId8; ?> ₽</div>
                </button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="popup" id="popup">
        <div class="popup_body">
            <form action="/php/auth.php" method="post">
                <div class="popup_content">
                    <div class="popup_letter"></div>
                    <div class="popup_title">Вход в личный кабинет</div>
                    <input type="text" placeholder="Логин" name="auth_login" class="popup_login popup_input">
                    <input type="password" placeholder="Пароль" name="auth_password" class="popup_password popup_input">
                    <button action="submit" class="popup_button">Вход</button>
                    <a href="#popup_2" class="popup_link popup_registration">
                        <div>Вас еще нет в системе?<br>
                            Зарегистрируйтесь!</div>
                    </a>
                </div>
            </form>
        </div>
    </div>
    <div class="popup" id="popup_2">
        <div class="popup_body">
            <form action="/php/registration.php" method="post">
                <div class="popup_content">
                    <div class="popup_letter"></div>
                    <div class="popup_title">Регистрация</div>
                    <input type="text" id="popup_name" placeholder="Ваше Имя:" name="popup_name"
                        class="popup_name popup_input">
                    <input type="email" id="popup_email" placeholder="Ваш E-mail:" name="popup_email"
                        class="popup_email popup_input">
                    <input type="password" id="popup_password" placeholder="Пароль" name="popup_password"
                        class="popup_password popup_input">
                    <input type="password" id="popup_passwordRepeat" name="popup_passwordRepeat"
                        placeholder="Повторите пароль" class="popup_passwordRepeat popup_input">
                    <button action="submit" id="popup_button" class="popup_button ">Зарегистрироваться</button>
                    <div id="error"></div>
                </div>
            </form>
        </div>
    </div>

    <script src="/js/search.js"></script>
    <script src="/js/filter.js"></script>
    <script src="/js/popup.js"></script>
    <script src="/js/registration.js"></script>
  </body>
</html>
