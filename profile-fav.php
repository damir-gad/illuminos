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
      <!-- Авторизация-Регистрация -->
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
            <img src="assets/img/user.svg" alt="user">
            <a href="assets/php/logout.php" style="color: #8D1E1E;">Выйти</a>
          </div>
        </div>
        <div class="header__section2">
          <a href="subscription.php"><button class="button1">Оформить подписку</button></a>
            <a href="search.php"><img src="assets/img/search.svg" alt="search" /></a>
          <img src="assets/img/user.svg" alt="user">
          <a href="assets/php/logout.php" style="color: #8D1E1E;">Выйти</a>
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
          <div class="profile-assets">
            <a href="profile.php" class="profile-asset" id="subs">Подписки</a>
            <a href="profile-fav.php" class="profile-asset" id="fav"><span>Избранное</span></a>
            <a href="profile-price.php" class="profile-asset" id="price">Скидки</a>
          </div>
          <div class="profile-content">
            <div class="profile-content-fav">
              <div class="profile-content-fav__block">
                <div class="profile-content-fav__title">
                <p>Избранное</p>
                <div class="profile-content-user__top-edit">
                  <img src="assets/img/edit.svg" alt="edit">
                  <p>изменить</p>
                </div>
                </div>
                <div class="profile-content-fav__content">
                <div class="forum-top__film">
                  <img src="assets/img/forum1.png" alt="film">
                  <div class="forum-top__film-content">
                    <div class="forum-top__film-content-top">
                      <div class="forum-top__film-content-top-title">Зеленая книга</div>
                      <div class="forum-top__film-content-top-category">
                        <img src="assets/img/comedy.svg" alt="img">
                        <p>Комедия</p>
                        <span></span>
                        <p>Фильм</p>
                      </div>
                    </div>
                    <div class="forum-top__film-content-bottom">
                      <img src="assets/img/star.svg" alt="star">
                      <p>4.6</p>
                      <div class="forum-top__film-content-bottom-text">
                        <p>45 оценок</p>
                        <span></span>
                        <p>9 статей</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="forum-top__film">
                  <img src="assets/img/forum2.png" alt="film">
                  <div class="forum-top__film-content">
                    <div class="forum-top__film-content-top">
                      <div class="forum-top__film-content-top-title">Рай под ногами матерей</div>
                      <div class="forum-top__film-content-top-category">
                        <img src="assets/img/drama.svg" alt="img">
                        <p>Драма</p>
                        <span></span>
                        <p>Фильм</p>
                      </div>
                    </div>
                    <div class="forum-top__film-content-bottom">
                      <img src="assets/img/star.svg" alt="star">
                      <p>4.6</p>
                      <div class="forum-top__film-content-bottom-text">
                        <p>12 оценок</p>
                        <span></span>
                        <p>2 статьи</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="forum-top__film">
                  <img src="assets/img/forum3.png" alt="film">
                  <div class="forum-top__film-content">
                    <div class="forum-top__film-content-top">
                      <div class="forum-top__film-content-top-title">Одна жизнь</div>
                      <div class="forum-top__film-content-top-category">
                        <img src="assets/img/drama.svg" alt="img">
                        <p>Драма</p>
                        <span></span>
                        <p>Фильм</p>
                      </div>
                    </div>
                    <div class="forum-top__film-content-bottom">
                      <img src="assets/img/star.svg" alt="star">
                      <p>4.6</p>
                      <div class="forum-top__film-content-bottom-text">
                        <p>20 оценок</p>
                        <span></span>
                        <p>10 статей</p>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                
            <div class="profile-content-user">
              <div class="profile-content-user__top">
                <div class="profile-content-user__top-title">Аккаунт</div>
                <div class="profile-content-user__top-edit">
                  <img src="assets/img/edit.svg" alt="edit">
                  <p>изменить</p>
                </div>
              </div>
              <div class="profile-content-user__main">
                <div class="profile-content-user__main-account">
                  <img src="assets/img/user-big.svg" alt="user-img">
                  <div class="profile-content-user__main-account-subs">
                    <p>24</p>
                    <p>Подписчиков</p>
                  </div>
                  <div class="profile-content-user__main-account-subscr">
                  <p>4</p>
                  <p>Подписки</p>
                  </div>
                </div>
                <div class="profile-content-user__main-context">
                  <div class="profile-content-user__main-context-name">Валерий</div>
                  <div class="profile-content-user__main-context-text">Валера, зэк из Черного Дельфинчика, решил стать мастером по изготовлению фигурок из мыла. Он мастерил статуэтки в виде тюремных охранников, и однажды все охранники, увидев эти фигурки, пришли в восторг. Валера был награжден тюремным клеймом “Ракушка” и получил целый ящик мыла.</div>
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
