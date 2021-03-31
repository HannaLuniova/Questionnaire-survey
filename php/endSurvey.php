<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Опрос</title>
    <!-- подключение css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- подключение обнуляющего css -->
    <link rel="stylesheet" href="../css/zeroing.css">
    <!-- подключение css со своими стилями -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Подключение адаптива -->
    <link rel="stylesheet" href="../css/adaptive.css">
</head>

<body>
    <!-- Блок header -->
    <header class="header">
        <div class="logo header__logo">
            <a class="logo__link" href="#">
                <img class="logo__link-img" src="../images/logo-header.png" alt="logo">
            </a>
        </div>
        <nav class="menu">
            <ul class="menu__list">
                <li class="menu__list-item">
                    <a class="menu__list-link menu__list-link--active" href="#">О нас</a>
                </li>
                <li class="menu__list-item">
                    <a class="menu__list-link" href="#">Lorem</a>
                </li>
                <li class="menu__list-item">
                    <a class="menu__list-link" href="#">Lorem</a>
                </li>
                <li class="menu__list-item">
                    <a class="menu__list-link" href="#">Контакты</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- Первый блок section -->
    <section class="slider">
        <!-- подключение carousel Bootstrap -->
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="../images/slider-item3.jpg" class="d-block w-100" alt="фотография">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../images/slider-item2.jpg" class="d-block w-100" alt="фотография">
                </div>
                <div class="carousel-item">
                    <img src="../images/slider-item.jpg" class="d-block w-100" alt="фотография">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- Второй блок section -->
    <section class="registr">
        <!-- подключение container Bootstrap -->
        <div class="container">
            <div class="registr__inner">
                <div class="registr__content">
                    <h3 class="registr__title reg">Поблагодарим за участие!<br><br>
                        Ваши личные данные останутся конфиденциальными</h3><br>
                    <a class="application-btn" href="../index.html" autofocus>Вернуться на главную <i class="fas fa-sync"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Третий блок section -->
    <section class="popular">
        <h3 class="popular__title">
            Lorem ipsum dolor
        </h3>
        <div class="container">
            <div class="popular__inner">
                <div class="popular__item">
                    <img class="popular__img" src="../images/popular-1.jpg" alt="фотография">
                    <h5 class="popular__item-title">LoremLorem<br> ipsum</h5>
                    <a class="popular__link" href="#">Детали</a>
                </div>
                <div class="popular__item">
                    <img class="popular__img" src="../images/popular-2.jpg" alt="фотография">
                    <h5 class="popular__item-title">LoremLorem<br> ipsum</h5>
                    <a class="popular__link" href="#">Детали</a>
                </div>
                <div class="popular__item">
                    <img class=popular__img src="../images/popular-3.jpg" alt="фотография">
                    <h5 class="popular__item-title">Lorem, ipsum<br> dolor lorem</h5>
                    <a class="popular__link" href="#">Детали</a>
                </div>
                <div class="popular__item">
                    <img class=popular__img src="../images/popular-4.jpg" alt="фотография">
                    <h5 class="popular__item-title">Lorem, ipsum<br> dolor</h5>
                    <a class="popular__link" href="#">Детали</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Четвёртый блок section -->
    <section class="reason">
        <div class="container">
            <div class="reason__inner">
                <div class="reason__item">
                    <!-- Дополнительный класс "reason__title--icon-2" к h4  для картинок -->
                    <h4 class="reason__title reason__title--icon-1">Lorem ipsum dolor sit amet consectetur adipisicing
                    </h4>
                    <p class="reason__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat qui,
                        doloribus culpa deleniti dignissimos eos accusantium quidem magnam voluptate ipsa reiciendis
                        necessitatibus? Praesentium odit nisi ipsum minus.</p>
                    <a class="reason__link" href="#">Подробнее</a>
                </div>
                <div class="reason__inner">
                    <div class="reason__item">
                        <!-- Дополнительный класс"reason__title--icon-2" к h4  для картинок -->
                        <h4 class="reason__title reason__title--icon-2">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit</h4>
                        <p class="reason__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat qui,
                            doloribus culpa deleniti dignissimos eos accusantium quidem magnam voluptate ipsa reiciendis
                            necessitatibus? Praesentium odit nisi ipsum minus.</p>
                        <a class="reason__link" href="#">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Пятый блок section -->
    <section class="best" style="background-image: url(../images/best.jpg);">
        <div class="container">
            <h3 class="best__title">
                Lorem ipsum<br> dolor sit
            </h3>
            <a class="best__link" href="#">Записаться</a>
        </div>
    </section>
    <!-- Шестой блок section -->
    <section class="about">
        <div class="container">
            <div class="about__inner">
                <div class="our-managers">
                    <h4 class="our-managers__title about__title">
                        Наши менеджеры
                    </h4>
                    <div class="our-managers__items">
                        <div class="our-managers__item">
                            <img class="our-managers__img" src="../images/our-managers-1.jpg" alt="фотография">
                            <ul class="our-managers__list">
                                <li class="our-managers__name">Lorem</li>
                                <li class="our-managers__age">Lorem, ipsum</li>
                                <li class="our-managers__location">Lorem</li>
                            </ul>
                            <button class="our-managers__btn">Связаться</button>
                        </div>
                        <div class="our-managers__item">
                            <img class="our-managers__img" src="../images/our-managers-2.jpg" alt="фотография">
                            <ul class="our-managers__list">
                                <li class="our-managers__name">Lorem</li>
                                <li class="our-managers__age">Lorem, ipsum</li>
                                <li class="our-managers__location">Lorem</li>
                            </ul>
                            <button class="our-managers__btn">Связаться</button>
                        </div>
                    </div>
                </div>
                <div class="blog">
                    <h4 class="about__title">
                        Блог
                    </h4>
                    <ul class="blog__list">
                        <li class="blog__item">
                            <a class="blog__link" href="#">
                                Lorem ipsum dolor sit
                            </a>
                        </li>
                        <li class="blog__item">
                            <a class="blog__link" href="#">
                                Lorem ipsum dolor sit amet
                            </a>
                        </li>
                        <li class="blog__item">
                            <a class="blog__link" href="#">
                                Lorem ipsum dolor sit amet
                            </a>
                        </li>
                        <li class="blog__item">
                            <a class="blog__link" href="#">
                                Lorem ipsum dolor sit amet
                            </a>
                        </li>
                        <li class="blog__item">
                            <a class="blog__link" href="#">
                                Lorem ipsum dolor sit amet
                            </a>
                        </li>
                        <li class="blog__item">
                            <a class="blog__link" href="#">
                                Lorem ipsum dolor sit
                            </a>
                        </li>
                        <li class="blog__item">
                            <a class="blog__link" href="#">
                                Lorem ipsum dolor sit
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="reviews">
                    <h4 class="about__title">
                        Отзывы
                    </h4>
                    </р>
                    <img class="reviews__img" src="../images/reviews.jpg" alt="Фотография">
                    <p class="reviews__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas culpa ratione
                        quidem quae soluta alias id modi officiis commodi assumenda.
                    </p>
                    <a class="reviews__link" href="#">
                        Ещё Отзывы
                    </a>

                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
        <div class="footer__top">
            <div class="container">
                <div class="footer__top-inner">
                    <form class="footer__form" action="admin.php" method="post">
                        <h4 class="footer__form-title">Войти под правами<br> администратора </h4>
                        <input class="footer__form-input" type="text" name="name" placeholder="Имя" tabindex="1">
                        <input class="footer__form-input" type="text" name="password" placeholder="Пароль" tabindex="2">
                        <button class="footer__form-btn" type="submit" tabindex="3">Войти</button>
                    </form>
                    <nav class="footer__menu">
                        <ul class="footer__menu-list">
                            <li class="footer__menu-item"><a class="footer__menu-link" href="#">О нас</a></li>
                            <li class="footer__menu-item"><a class="footer__menu-link" href="#">Lorem</a></li>
                            <li class="footer__menu-item"><a class="footer__menu-link" href="#">Lorem</a></li>
                            <li class="footer__menu-item"><a class="footer__menu-link" href="#">Отзывы</a></li>
                            <li class="footer__menu-item"><a class="footer__menu-link" href="#">Контакты</a></li>
                        </ul>
                    </nav>
                    <div class="footer__question">
                        <form class="footer__form-question">
                            <label class="footer__form-label-question">Связаться<br> с нами</label>
                            <input class="footer__form-input-question" type="text" placeholder="Задать вопрос">
                            <button class="footer__form-btn-question" type="submit">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo footer__logo">
            <a class="logo__link" href="#">
                <img class="logo__link-img" src="../images/footer-logo.png" alt="logo">
            </a>
        </div>
    </footer>
    <!-- подключение js Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>