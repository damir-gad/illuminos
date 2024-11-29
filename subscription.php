<?php
  session_start();
  require_once 'assets/php/config/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Подключение стилей -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- player -->
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <title>ILLUMINOS</title>
  </head>
  <body>
    <!-- Общий контейнер -->
    <div class="wrapper">
      <!-- Авторизация-Регистрация-Оплата -->
      <div class="modal-window">
        <div class="modal-window__container">
          <div class="modal-window__login modal-window-login">
            <div class="modal-window__login__header">
              <div class="modal-window__login__logo">
                <img src="assets/img/logo.svg" alt="logo">
                <p>Авторизация</p>
              </div>
              <div class="modal-window__close">Закрыть</div>
            </div>
            <form action="assets/php/signin.php" method="post">
              <label for="email">Почта</label>
              <input type="email" id="email" name="email" placeholder="Почта" required onchange="prov()">
              <label for="password">Пароль</label>
              <input type="password" id="password" name="password" placeholder="Пароль" required onchange="prov()">
              <a href="#" class="reset-password">Забыл пароль</a>
              <button type="submit" id="login" name="login" class="buttton-login">Войти</button>
              <p>Нет аккаунта? <a class="login">Зарегестрироваться</a></p>
              <?php
                if (isset($_SESSION['message'])){
                  echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                  
                }
                unset($_SESSION['message']);
              ?>
            </form>
          </div>
          <div class="modal-window__login modal-window-register" >
            <div class="modal-window__login__header">
              <div class="modal-window__login__logo">
                <img src="assets/img/logo.svg" alt="logo">
                <p>Регистрация</p>
              </div>
              <div class="modal-window__close">Закрыть</div>
            </div>
            <form action="assets/php/signup.php" method="post">
              <label for="name">Имя</label>
              <input type="text" id="name" name="name" placeholder="Имя" required onchange="provv()">
              <label for="email">Почта</label>
              <input type="email" id="email" name="email" placeholder="Почта" required onchange="provv()">
              <label for="password">Пароль</label>
              <input type="password" id="password" name="password" placeholder="Пароль" required onchange="provv()">
              <label for="password">Подтверждение пароля</label>
              <input type="password" id="password_confirm" name="password_confirm" placeholder="Подтвердите пароль" required onchange="provv()">
              <div>
                <input
                  type="checkbox"
                  class="custom-checkbox"
                  id="blank"
                  name="blank"
                  value="yes"
                  required
                />
                <label for="blank"
                  ><p>Я принимаю <a>Условия пользования </a> и <a> Политику конфиденциальности </a></p></label
                >
              </div>
              <button type="submit" id="register" name="register" class="button-register">Продолжить</button>
              <p>Есть аккаунта? <a class="register">Войти</a></p>
              <?php
                if (isset($_SESSION['message'])){
                  echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                  
                }
                unset($_SESSION['message']);
              ?>
            </form>
          </div>

          <div class="modal-window__login modal-window-subs" >
            <div class="modal-window__login__header">
              <div class="modal-window__login__logo">
                <img src="assets/img/logo.svg" alt="logo">
                <p>Оплата</p>
              </div>
              <div class="modal-window__close">Закрыть</div>
            </div>
            <form action="#" method="post">
              <label for="number">Номер карты</label>
              <input type="number" id="number" name="number" placeholder="Номер карты" required onchange="provvv()">
              <label for="number">Срок действия</label>
              <input type="number" id="date" name="date" placeholder="Срок действия" required onchange="provvv()">
              <label for="text">Имя на карте</label>
              <input type="text" id="namecart" name="namecart" placeholder="Имя на карте" required onchange="provvv()">
              <label for="number">CVC</label>
              <input type="number" id="cvc" name="cvc" placeholder="CVC" required onchange="provvv()">
              <button type="submit" id="pay" name="pay" class="button-pay">Оплатить</button>
              <?php
                if (isset($_SESSION['message'])){
                  echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                  
                }
                unset($_SESSION['message']);
              ?>
            </form>
          </div>
          
        </div>
        <span></span>
      </div>
      <!-- Шапка -->
      <header class="header _container">
        <div class="header__section1">
          <a href="index.php" class="header__logo">
            <img src="assets/img/logo.svg" alt="logo" />
          </a>
          <nav class="header__nav">
            <ul class="header__menu">
              <li class="header__item">
                <a href="index.php" class="header__link">Главная</a>
              </li>
              <li class="header__item">
                <a href="films.php" class="header__link">Фильмы</a>
              </li>
              <li class="header__item">
                <a href="series.php" class="header__link">Сериалы</a>
              </li>
              <li class="header__item">
                <a href="news.php" class="header__link">Новости</a>
              </li>
              <li class="header__item">
                <a href="forum.php" class="header__link">Сообщество</a>
              </li>
              <li class="header__item">
                <a href="about.php" class="header__link">О нас</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="burger__container">
          <ul class="header__menu">
            <li class="header__item">
              <a href="index.php" class="header__link">Главная</a>
            </li>
            <li class="header__item">
              <a href="films.php" class="header__link">Фильмы</a>
            </li>
            <li class="header__item">
              <a href="series.php" class="header__link">Сериалы</a>
            </li>
            <li class="header__item">
              <a href="news.php" class="header__link">Новости</a>
            </li>
            <li class="header__item">
              <a href="forum.php" class="header__link">Сообщество</a>
            </li>
            <li class="header__item">
              <a href="about.php" class="header__link">О нас</a>
            </li>
          </ul>
          <div class="burger__content">
            <a href="subscription.php"><button class="button1">Оформить подписку</button></a>
            <a href="search.php"><img src="assets/img/search.svg" alt="search" /></a>
            <button class="button2">Войти</button>
          </div>
        </div>
        <div class="header__section2">
            <a href="subscription.php"><button class="button1">Оформить подписку</button></a>
            <a href="search.php"><img src="assets/img/search.svg" alt="search" /></a>
          <button class="button2">Войти</button>
          <div class="burger">
            <span></span>
          </div>
        </div>
      </header>
      

      <div class="hero-prof">
          <div class="hero__overlay"></div>
          <div class="hero-prof-img"></div>
      </div>
      
      <main>
        <section class="profile">
          <div class="profile-content">
            <div class="profile-content-subs">
              <div class="profile-content-subs-title">Тарифы подписок</div>
              <div class="profile-content-subs-cards">
                <div class="profile-content-subs-card">
                  <div class="profile-content-subs-card-title">Базовый</div>
                  <div class="profile-content-subs-card-prem">
                    <ul>
                      <li>
                        <p>Более 70 000 фильмов и сериалов</p>
                        <img src="assets/img/check.svg" alt="check">
                      </li>
                      <li>
                        <p>Детский профиль и родительский контроль</p>
                        <img src="assets/img/lock.svg" alt="lock">
                      </li>
                      <li>
                        <p>Эксклюзивные фильмы и сериалы</p>
                        <img src="assets/img/lock.svg" alt="lock">
                      </li>
                      <li>
                        <p>Каталог фильмов и сериалов NETFLIX</p>
                        <img src="assets/img/lock.svg" alt="lock">
                      </li>
                      <li>
                        <p>Просмотр и загрузка без интернета</p>
                        <img src="assets/img/lock.svg" alt="lock">
                      </li>
                    </ul>
                  </div>
                  <div class="profile-content-subs-card-price">
                    <p>299 </p>
                    <img src="assets/img/rub.svg" alt="rub">
                    <p> / в месяц</p>
                  </div>
                  <button class="button-subs">
                    <p>Оформить за 299 </p>
                    <img src="assets/img/rub.svg" alt="rub">
                  </button>
                </div>
                <div class="profile-content-subs-card">
                  <div class="profile-content-subs-card-title">Стандартный</div>
                  <div class="profile-content-subs-card-prem">
                    <ul>
                      <li>
                        <p>Более 70 000 фильмов и сериалов</p>
                        <img src="assets/img/check.svg" alt="check">
                      </li>
                      <li>
                        <p>Детский профиль и родительский контроль</p>
                        <img src="assets/img/check.svg" alt="check">
                      </li>
                      <li>
                        <p>Эксклюзивные фильмы и сериалы</p>
                        <img src="assets/img/check.svg" alt="check">
                      </li>
                      <li>
                        <p>Каталог фильмов и сериалов NETFLIX</p>
                        <img src="assets/img/lock.svg" alt="lock">
                      </li>
                      <li>
                        <p>Просмотр и загрузка без интернета</p>
                        <img src="assets/img/lock.svg" alt="lock">
                      </li>
                    </ul>
                  </div>
                  <div class="profile-content-subs-card-price">
                    <p>249 </p>
                    <img src="assets/img/rub.svg" alt="rub">
                    <p> / в месяц</p>
                  </div>
                  <button class="button-subs">
                    <p>3 месяца за 749 </p>
                    <img src="assets/img/rub.svg" alt="rub">
                  </button>
                </div>
                <div class="profile-content-subs-card">
                  <div class="profile-content-subs-card-title">Премиум</div>
                  <div class="profile-content-subs-card-prem">
                    <ul>
                      <li>
                        <p>Более 70 000 фильмов и сериалов</p>
                        <img src="assets/img/check.svg" alt="check">
                      </li>
                      <li>
                        <p>Детский профиль и родительский контроль</p>
                        <img src="assets/img/check.svg" alt="check">
                      </li>
                      <li>
                        <p>Эксклюзивные фильмы и сериалы</p>
                        <img src="assets/img/check.svg" alt="check">
                      </li>
                      <li>
                        <p>Каталог фильмов и сериалов NETFLIX</p>
                        <img src="assets/img/check.svg" alt="check">
                      </li>
                      <li>
                        <p>Просмотр и загрузка без интернета</p>
                        <img src="assets/img/check.svg" alt="check">
                      </li>
                    </ul>
                  </div>
                  <div class="profile-content-subs-card-price">
                    <p>216 </p>
                    <img src="assets/img/rub.svg" alt="rub">
                    <p> / в месяц</p>
                  </div>
                  <button class="button-subs">
                    <p>6 месяцев за 1299 </p>
                    <img src="assets/img/rub.svg" alt="rub">
                  </button>
                </div>
              </div>
            </div>
            
          </div>  
        </section>
      </main>
      <footer class="footer">
        <div class="footer__wrapper _container">
          <div class="footer__wrapper__main">
            <div class="footer__wrapper__main-title">
              Нашей платформе доверяют миллионы людей, и на ней представлены
              лучшие обновленные фильмы со всего мира.
            </div>
            <div class="footer__wrapper__main-block">
              <nav class="footer__wrapper__main-block-nav">
                <ul class="footer__wrapper__main-block-menu">
                  <li class="footer__wrapper__main-block-item">
                    <a href="index.php" class="footer__wrapper__main-block-link"
                      >Главная</a
                    >
                  </li>
                  <li class="footer__wrapper__main-block-item">/</li>
                  <li class="footer__wrapper__main-block-item">
                    <a href="#" class="footer__wrapper__main-block-link"
                      >Сериалы</a
                    >
                  </li>
                  <li class="footer__wrapper__main-block-item">/</li>
                  <li class="footer__wrapper__main-block-item">
                    <a href="#" class="footer__wrapper__main-block-link"
                      >Фильмы</a
                    >
                  </li>
                  <li class="footer__wrapper__main-block-item">/</li>
                  <li class="footer__wrapper__main-block-item">
                    <a href="#" class="footer__wrapper__main-block-link"
                      >Релизы</a
                    >
                  </li>
                </ul>
              </nav>
              <nav class="footer__wrapper__main-block-socs">
                <ul class="footer__wrapper__main-block-socs-menu">
                  <li class="footer__wrapper__main-block-socs-item">
                    <a href="#" class="footer__wrapper__main-block-socs-link">
                      <img src="assets/img/Instagram.svg" alt="Instagram" />
                    </a>
                  </li>
                  <li class="footer__wrapper__main-block-socs-item">
                    <a href="#" class="footer__wrapper__main-block-socs-link">
                      <img src="assets/img/Facebook.svg" alt="Facebook" />
                    </a>
                  </li>
                  <li class="footer__wrapper__main-block-socs-item">
                    <a href="#" class="footer__wrapper__main-block-socs-link">
                      <img src="assets/img/Twitter.svg" alt="Twitter" />
                    </a>
                  </li>
                  <li class="footer__wrapper__main-block-socs-item">
                    <a href="#" class="footer__wrapper__main-block-socs-link">
                      <img src="assets/img/Google.svg" alt="Google" />
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="footer__wrapper__inc">
            <nav class="footer__wrapper__inc-nav">
              <ul class="footer__wrapper__inc-nav-menu">
                <li class="footer__wrapper__inc-nav-item">
                  <a href="#" class="footer__wrapper__inc-nav-link"
                    >Политика конфиденциальности</a
                  >
                </li>
                <li class="footer__wrapper__inc-nav-item">
                  <a href="#" class="footer__wrapper__inc-nav-link"
                    >Срок службы</a
                  >
                </li>
                <li class="footer__wrapper__inc-nav-item">
                  <a href="#" class="footer__wrapper__inc-nav-link">Язык</a>
                </li>
                <li class="footer__wrapper__inc-nav-item">
                  <a href="faq.php" class="footer__wrapper__inc-nav-link">FAQ</a>
                </li>
              </ul>
            </nav>
            <div class="footer__wrapper__inc-date">© 2024</div>
          </div>
        </div>
      </footer>
      
    </div>
  </body>
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
  <script src="assets/js/scripts.js"></script>
</html>
