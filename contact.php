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

        <!-- Page Banner Section Start -->
        <div class="page-banner-section section" style="background-image: url(images/banner3.jfif)">
            <div class="container">
                <div class="row">
                    <div class="page-banner-content col">

                        <h1>Контакты</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.html">Главная</a></li>
                            <li><a href="contact.html">Контакты</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div><!-- Page Banner Section End -->

        <!-- Page Section Start -->
        <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
            <div class="container">
                <div class="row row-30">

                    <div class="contact-info-wrap col-md-6 col-12 mb-40">
                        <h3>Связаться с нами</h3>
                        <p>Краткая информация</p>
                        <ul class="contact-info">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <p>Наш адрес <br></p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p><a href="#">87777777777</a><a href="#">87777777777</a></p>
                            </li>
                            <li>
                                <i class="fa fa-globe"></i>
                                <p><a href="#">info@example.com</a><a href="#">www.example.com</a></p>
                            </li>
                        </ul>
                    </div>

                    <div class="contact-form-wrap col-md-6 col-12 mb-40">
                        <h3>Оставить сообщение</h3>
                        <form action="contact.php" method="post">
                            <div class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-30"><input type="text" name="name" placeholder="Имя"></div>
                                    <div class="col-lg-6 col-12 mb-30"><input type="mail" name="email" placeholder="Номер телефона"></div>
                                    <div class="col-12 mb-30"><textarea name="message" placeholder="Сообщение"></textarea></div>
                                    <div class="col-12"><input type="submit" value="Отправить" name="contact-form"></div>
                                </div>
                                <?php
                                function f3()
                                {
                                    $mail = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
                                    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
                                    $text = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);
                                    $mysql = new mysqli('localhost', 'root', '', 'users1');
                                    $mysql->query("INSERT INTO `messages`(`name`, `email`, `mes`) VALUES ('$name', '$mail', '$text')");
                                    $mysql->close();
                                    echo ("Наши специалисты с вами свяжутся.");
                                }
                                if (isset($_POST['contact-form'])) {
                                    f3();
                                }
                                ?>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>

                </div>
            </div>
        </div><!-- Page Section End -->

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

        <!-- Footer Top Section Start -->
        <div class="footer-top-section section bg-theme-two-light pt-80 pt-lg-60 pt-md-60 pt-sm-60 pt-xs-40 pb-40 pb-lg-20 pb-md-20 pb-sm-20 pb-xs-0">
            <div class="container">
                <div class="row">

                    <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                        <h4 class="title">Связаться с нами</h4>
                        <p>Наш адрес:<br /> Астана</p>
                        <p><a href="tel:01234567890">87777777777</a><a href="tel:01234567891">87077777777</a></p>
                        <p><a href="mailto:info@example.com">info@example.com</a><a href="#">www.example.com</a></p>
                    </div>

                    <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                        <h4 class="title">Товары</h4>
                        <ul>
                            <li><a href="#">Новое поступление</a></li>
                            <li><a href="#">Футболки</a></li>
                            <li><a href="#">Штаны</a></li>
                            <li><a href="#">Верхняя одежда</a></li>
                            <li><a href="#">Часы</a></li>
                            <li><a href="#">Аксессуары</a></li>
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