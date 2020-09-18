<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icon-font.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div class="main-wrapper">

        <!-- Header Section Start -->
        <div class="header-section section">

            <!-- Header Top Start -->
            <div class="header-top header-top-one bg-theme-two">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-center">

                        <div class="col mt-10 mb-10 d-none d-md-flex">
                            <!-- Header Top Left Start -->
                            <div class="header-top-left">
                                <p>Добро пожаловать в сайт детских вещей</p>
                            </div><!-- Header Top Left End -->
                        </div>

                        <div class="col mt-10 mb-10">
                            <!-- Header Language Currency Start -->
                            <ul class="header-lan-curr">



                            </ul><!-- Header Language Currency End -->
                        </div>

                        <div class="col mt-10 mb-10">
                            <!-- Header Shop Links Start -->
                            <div class="header-top-right">
                                <?php
                                if (isset($_COOKIE['user'])) :
                                ?>
                                    <p><a href="#">Мой аккаунт</a><a href="exit.php">Выйти</a></p>

                                <?php else : ?>
                                    <p><a href="login-register.php">Регистрация</a><a href="login-register.php">Логин</a></p>
                                <?php endif; ?>
                            </div><!-- Header Shop Links End -->
                        </div>

                    </div>
                </div>
            </div><!-- Header Top End -->

            <!-- Header Bottom Start -->
            <div class="header-bottom header-bottom-one header-sticky@">
                <div class="container-fluid">
                    <div class="row menu-center align-items-center justify-content-between">

                        <div class="col mt-15 mb-15">
                            <!-- Logo Start -->
                            <div class="header-logo">
                                <a href="index.php">
                                    <img src="images/LOGODEF.png" alt="Сайт детских вещей">
                                </a>
                            </div><!-- Logo End -->
                        </div>

                        <div class="col order-2 order-lg-3">
                            <!-- Header Advance Search Start -->
                            <div class="header-shop-links">

                                <div class="header-search">
                                    <button class="search-toggle"><img src="assets/images/icons/search.png" alt="Search Toggle"><img class="toggle-close" src="assets/images/icons/close.png" alt="Search Toggle"></button>
                                    <div class="header-search-wrap">
                                        <form action="#">
                                            <input type="text" placeholder="Type and hit enter">
                                            <button><img src="assets/images/icons/search.png" alt="Search"></button>
                                        </form>
                                    </div>
                                </div>

                                <div class="header-wishlist">
                                    <a href="wishlist.php"><img src="assets/images/icons/wishlist.png" alt="Wishlist"> <span>02</span></a>
                                </div>

                                <div class="header-mini-cart">
                                    <a href="cart.php"><img src="assets/images/icons/cart.png" alt="Cart"> <span>02(10490тг)</span></a>
                                </div>

                            </div><!-- Header Advance Search End -->
                        </div>

                        <div class="col order-3 order-lg-2">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="index.php">Главная</a></li>
                                        <li><a href="shop.php">Коллекция</a></li>
                                        <li><a href="contact.php">Контакты</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!-- Mobile Menu -->
                        <div class="mobile-menu order-12 d-block d-lg-none col"></div>

                    </div>
                </div>
            </div><!-- Header BOttom End -->

        </div><!-- Header Section End -->

        <!-- Hero Section Start -->
        <div class="hero-section section">

            <!-- Hero Slider Start -->
            <div class="hero-slider hero-slider-one fix">

                <!-- Hero Item Start -->
                <div class="hero-item" style="background-image: url(images/kids-banner.jpg)">

                    <!-- Hero Content -->
                    <div class="hero-content">

                        <h1>Лучшие предложения <br>Скидки до 70%</h1>
                        <a href="shop.html">Купить</a>

                    </div>

                </div><!-- Hero Item End -->

                <!-- Hero Item Start -->
                <div class="hero-item" style="background-image: url(images/wall2.jpg)">

                    <!-- Hero Content -->
                    <div class="hero-content">

                        <h1>Новейшая коллекция <br>Только у нас</h1>
                        <a href="shop.html">Купить</a>

                    </div>

                </div><!-- Hero Item End -->

            </div><!-- Hero Slider End -->

        </div><!-- Hero Section End -->

        <!-- Banner Section Start -->
        <div class="banner-section section mt-40 mt-xs-20 mb-60 mb-lg-40 mb-md-40 mb-sm-40 mb-xs-20">
            <div class="container-fluid">
                <div class="row row-10">

                    <div class="col-lg-4 col-md-6 col-12 mb-20">
                        <div class="banner banner-1 content-left content-middle">

                            <a href="#" class="image"><img src="images/banner-1.jpg"></a>

                            <div class="content">
                                <h1>Новое поступление <br>детских ботинок <br>СКИДКА ДО 30%</h1>
                                <a href="shop.html" data-hover="Купить">Купить</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-20">
                        <a href="shop.html" class="banner banner-2">

                            <img src="images/banner-2.jpg" alt="Banner Image">

                            <div class="content bg-theme-one">
                                <h1>Новые товары для вашего ребенка</h1>
                            </div>

                            <span class="banner-offer">-25%</span>

                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-20">
                        <div class="banner banner-1 content-left content-top">

                            <a href="shop.html" class="image"><img src="images/banner-1.jpg" alt="Banner Image"></a>

                            <div class="content">
                                <h1>Модные <br>коллекций</h1>
                                <a href="shop.html" data-hover="Купить">Купить</a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div><!-- Banner Section End -->

        <!-- Product Section Start -->
        <div class="product-section section mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
            <div class="container">

                <div class="row">
                    <div class="section-title text-center col mb-30">
                        <h1>Популярные продукты</h1>
                        <p>Все популярные продукты здесь:</p>
                    </div>
                </div>

                <div class="row">

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                        <div class="product-item">
                            <div class="product-inner">

                                <div class="image">
                                    <img src="images/shoes1.jpg" alt="">

                                    <div class="image-overlay">
                                        <div class="action-buttons">
                                            <button>в корзину</button>
                                            <button>в избранное</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="content">

                                    <div class="content-left">

                                        <h4 class="title"><a href="single-product.html">Nike shoes</a></h4>

                                        <div class="ratting">
                                        </div>

                                        <h5 class="size">Размер: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                        <h5 class="color">Цвет: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                    </div>

                                    <div class="content-right">
                                        <span class="price">9990</span>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                        <div class="product-item">
                            <div class="product-inner">

                                <div class="image">
                                    <img src="images/shoes1.jpg" alt="">

                                    <div class="image-overlay">
                                        <div class="action-buttons">
                                            <button>в корзину</button>
                                            <button>в избранное</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="content">

                                    <div class="content-left">

                                        <h4 class="title"><a href="single-product.html">Nike shoes</a></h4>

                                        <div class="ratting">
                                        </div>

                                        <h5 class="size">Размер: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                        <h5 class="color">Цвет: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                    </div>

                                    <div class="content-right">
                                        <span class="price">9990</span>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                        <div class="product-item">
                            <div class="product-inner">

                                <div class="image">
                                    <img src="images/shoes1.jpg" alt="">

                                    <div class="image-overlay">
                                        <div class="action-buttons">
                                            <button>в корзину</button>
                                            <button>в избранное</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="content">

                                    <div class="content-left">

                                        <h4 class="title"><a href="single-product.html">Nike shoes</a></h4>

                                        <div class="ratting">
                                        </div>

                                        <h5 class="size">Размер: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                        <h5 class="color">Цвет: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                    </div>

                                    <div class="content-right">
                                        <span class="price">9990</span>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                        <div class="product-item">
                            <div class="product-inner">

                                <div class="image">
                                    <img src="images/shoes1.jpg" alt="">

                                    <div class="image-overlay">
                                        <div class="action-buttons">
                                            <button>в корзину</button>
                                            <button>в избранное</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="content">

                                    <div class="content-left">

                                        <h4 class="title"><a href="single-product.html">Nike shoes</a></h4>

                                        <div class="ratting">
                                        </div>

                                        <h5 class="size">Размер: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                        <h5 class="color">Цвет: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                    </div>

                                    <div class="content-right">
                                        <span class="price">9990</span>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                        <div class="product-item">
                            <div class="product-inner">

                                <div class="image">
                                    <img src="images/shoes1.jpg" alt="">

                                    <div class="image-overlay">
                                        <div class="action-buttons">
                                            <button>в корзину</button>
                                            <button>в избранное</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="content">

                                    <div class="content-left">

                                        <h4 class="title"><a href="single-product.html"> Nike shoes</a></h4>

                                        <div class="ratting">
                                        </div>

                                        <h5 class="size">Размер: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                        <h5 class="color">Цвет: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                    </div>

                                    <div class="content-right">
                                        <span class="price">9990</span>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                        <div class="product-item">
                            <div class="product-inner">

                                <div class="image">
                                    <img src="images/shoes1.jpg" alt="">

                                    <div class="image-overlay">
                                        <div class="action-buttons">
                                            <button>в корзину</button>
                                            <button>в избранное</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="content">

                                    <div class="content-left">

                                        <h4 class="title"><a href="single-product.html">Nike shoes</a></h4>

                                        <div class="ratting">
                                        </div>

                                        <h5 class="size">Размер: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                        <h5 class="color">Цвет: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                    </div>

                                    <div class="content-right">
                                        <span class="price">9990</span>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                        <div class="product-item">
                            <div class="product-inner">

                                <div class="image">
                                    <img src="images/shoes1.jpg" alt="">

                                    <div class="image-overlay">
                                        <div class="action-buttons">
                                            <button>в корзину</button>
                                            <button>в избранное</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="content">

                                    <div class="content-left">

                                        <h4 class="title"><a href="single-product.html">Nike shoes</a></h4>

                                        <div class="ratting">
                                        </div>

                                        <h5 class="size">Размер: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                        <h5 class="color">Цвет: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                    </div>

                                    <div class="content-right">
                                        <span class="price">9990</span>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                        <div class="product-item">
                            <div class="product-inner">

                                <div class="image">
                                    <img src="images/shoes1.jpg" alt="">

                                    <div class="image-overlay">
                                        <div class="action-buttons">
                                            <button>в корзине</button>
                                            <button>в избранное</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="content">

                                    <div class="content-left">

                                        <h4 class="title"><a href="single-product.html">Nike shoes</a></h4>

                                        <div class="ratting">
                                        </div>

                                        <h5 class="size">Размер: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                        <h5 class="color">Цвет: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                    </div>

                                    <div class="content-right">
                                        <span class="price">9990</span>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Product Section End -->
        <!-- Brand Section Start -->
        <div class="brand-section section mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
            <div class="container-fluid">
                <div class="row">
                    <div class="brand-slider">

                        <div class="brand-item col">
                            <img src="assets/images/brands/brand-1.png" alt="">
                        </div>

                        <div class="brand-item col">
                            <img src="assets/images/brands/brand-2.png" alt="">
                        </div>

                        <div class="brand-item col">
                            <img src="assets/images/brands/brand-3.png" alt="">
                        </div>

                        <div class="brand-item col">
                            <img src="assets/images/brands/brand-4.png" alt="">
                        </div>

                        <div class="brand-item col">
                            <img src="assets/images/brands/brand-5.png" alt="">
                        </div>

                        <div class="brand-item col">
                            <img src="assets/images/brands/brand-6.png" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- Brand Section End -->
        <!-- Feature Section Start -->
        <div class="feature-section section bg-theme-two pt-65 pt-lg-55 pt-md-45 pt-sm-45 pt-xs-25 pb-65 pb-lg-55 pb-md-45 pb-sm-45 pb-xs-25 fix" style="background-image: url(assets/images/pattern/pattern-dot.png);">
            <div class="container">
                <div class="feature-wrap row justify-content-between">

                    <div class="col-md-4 col-12 mt-15 mb-15">
                        <div class="feature-item text-center">

                            <div class="icon"><img src="assets/images/feature/feature-1.png" alt=""></div>
                            <div class="content">
                                <h3>Бесплатная доставка</h3>
                                <p>От 3000тг</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 col-12 mt-15 mb-15">
                        <div class="feature-item text-center">

                            <div class="icon"><img src="assets/images/feature/feature-2.png" alt=""></div>
                            <div class="content">
                                <h3>Гарантия возврата денег</h3>
                                <p>в течении 15 дней</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 col-12 mt-15 mb-15">
                        <div class="feature-item text-center">

                            <div class="icon"><img src="assets/images/feature/feature-3.png" alt=""></div>
                            <div class="content">
                                <h3>Защищенные платежи</h3>
                                <p>Безопасность платежей </p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div><!-- Feature Section End -->


        <!-- Footer Top Section Start -->
        <div class="footer-top-section section bg-theme-two-light pt-80 pt-lg-60 pt-md-60 pt-sm-60 pt-xs-40 pb-40 pb-lg-20 pb-md-20 pb-sm-20 pb-xs-0">
            <div class="container">
                <div class="row">

                    <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                        <h4 class="title">Связаться с нами</h4>
                        <p>Наш адрес:<br /> Астана</p>
                        <p><a href="tel:87777777777">87777777777</a><a href="tel:87077777777">87077777777</a></p>
                        <p><a href="mailto:info@example.com">info@example.com</a><a href="#">www.example.com</a></p>
                    </div>

                    <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                        <h4 class="title">Товары</h4>
                        <ul>
                            <li><a href="shop.html">Верхняя Одежда</a></li>
                            <li><a href="shop.html">Футболки и майки</a></li>
                            <li><a href="shop.html">Юбки и шорты</a></li>
                            <li><a href="shop.html">Брюки и джинсы</a></li>
                            <li><a href="shop.html">Часы</a></li>
                            <li><a href="shop.html">Аксессуары</a></li>
                        </ul>
                    </div>

                    <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                        <h4 class="title">Информация</h4>
                        <ul>
                            <li><a href="#">Условия и положения</a></li>
                            <li><a href="#">Гарантия продукта</a></li>
                            <li><a href="#">Возврат товара</a></li>
                            <li><a href="#">Безопасность платежа</a></li>
                        </ul>
                    </div>

                    <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                        <h4 class="title">Новости</h4>
                        <p>Подписывайтесь и получайте все новости о наших товарах</p>

                        <form id="mc-form" class="mc-form footer-subscribe-form" novalidate="true">
                            <input id="mc-email" autocomplete="off" placeholder="Введите свой электронный адрес" name="EMAIL" type="email">
                            <button id="mc-submit"><i class="fa fa-paper-plane-o"></i></button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div><!-- mailchimp-alerts end -->

                        <h5>Подписывайтесь на нас</h5>
                        <p class="footer-social"><a href="#">Facebook</a> - <a href="#">Twitter</a> - <a href="#">Instagram</a></p>

                    </div>

                </div>
            </div>
        </div><!-- Footer Top Section End -->

        <!-- Footer Bottom Section Start -->
        <div class="footer-bottom-section section bg-theme-two pt-15 pb-15">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <p class="footer-copyright">Copyright &copy; All rights reserved</p>
                    </div>
                </div>
            </div>
        </div><!-- Footer Bottom Section End -->

    </div>

    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>
    <!-- Ajax Mail -->
    <script src="assets/js/ajax-mail.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>