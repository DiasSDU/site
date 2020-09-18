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

    <?php
    require_once "functions.php";
    $products = getProduct(10, $_GET["id"]);
    $title = $products["name"];
    ?>

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
                                    <a href="cart.php"><img src="assets/images/icons/cart.png" alt="Cart"> <span>02(10490₸г)</span></a>
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
        <?php
        echo '<div class="page-banner-section section" style="background-image: url(images/banner3.jfif)">
          <div class="container">
              <div class="row">
                  <div class="page-banner-content col">

                      <h1>' . $products["category"] . '</h1>
                      <ul class="page-breadcrumb">
                          <li><a href="index.php">Главная</a></li>
                          <li><a href="shop.php">' . $products["category"] . '</a></li>
                      </ul>

                  </div>
              </div>
          </div>
      </div><!-- Page Banner Section End -->';
        ?>


        <!-- Page Section Start -->
        <?php
        $sizes = $products["size"];
        $sizess = explode(" ", $sizes);
        $colorss = $products["color"];
        $colorst = explode(" ", $colorss);


        echo '<div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
          <div class="container">
              <div class="row row-30">

                  <div class="col-12">
                      <div class="row row-20 mb-20 mb-xs-0">

                          <div class="col-lg-6 col-12 mb-40">

                              <div class="pro-large-img mb-10 fix easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                                  <a href="assets/images/product/Zoom-product-' . $products["id"] . '(1).jpg">
                                      <img src="assets/images/product/Big-product-' . $products["id"] . '(1).jpg" alt=""/>
                                  </a>
                              </div>
                              <!-- Single Product Thumbnail Slider -->
                              <ul id="pro-thumb-img" class="pro-thumb-img">
                                  <li><a href="assets/images/product/Zoom-product-' . $products["id"] . '(1).jpg" data-standard="assets/images/product/Big-product-' . $products["id"] . '(1).jpg"><img src="assets/images/product/product-' . $products["id"] . '(1).jpg" alt="" /></a></li>
                                  <li><a href="assets/images/product/Zoom-product-' . $products["id"] . '(2).jpg" data-standard="assets/images/product/Big-product-' . $products["id"] . '(2).jpg"><img src="assets/images/product/product-' . $products["id"] . '(2).jpg" alt="" /></a></li>
                                  <li><a href="assets/images/product/Zoom-product-' . $products["id"] . '(3).jpg" data-standard="assets/images/product/Big-product-' . $products["id"] . '(3).jpg"><img src="assets/images/product/product-' . $products["id"] . '(3).jpg" alt="" /></a></li>
                                  <li><a href="assets/images/product/Zoom-product-' . $products["id"] . '(4).jpg" data-standard="assets/images/product/Big-product-' . $products["id"] . '(4).jpg"><img src="assets/images/product/product-' . $products["id"] . '(4).jpg" alt="" /></a></li>
                                  <li><a href="assets/images/product/Zoom-product-' . $products["id"] . '(5).jpg" data-standard="assets/images/product/Big-product-' . $products["id"] . '(5).jpg"><img src="assets/images/product/product-' . $products["id"] . '(5).jpg" alt="" /></a></li>
                              </ul>
                          </div>

                          <div class="col-lg-6 col-12 mb-40">
                              <div class="single-product-content">

                                  <div class="head">
                                      <div class="head-left">

                                          <h3 class="title">' . $products["name"] . '</h3>



                                      </div>

                                      <div class="head-right">
                                          <span class="price">' . $products["price"] . '₸</span>
                                      </div>
                                  </div>

                                  <div class="description">
                                      <p>' . $products["info"] . '</p>
                                  </div>

                                  <span class="availability">Наличие: <span>' . $products["status"] . '</span></span>
                                <form action="functions.php" method="post">
                                  <div class="quantity-colors">

                                      <div class="quantity">
                                          <h5>Количество:</h5>
                                          <div class="pro-qty"><input type="text" value="1" name="quantityy"></div>
                                      </div>

                                      <div class="product-short" style="float:left">
                                    <h4 style="margin-right:10px">Цвет:</h4>
                                    
                                      <select id="select1" name="select1" class="nice-select">';
        for ($i = 0; $i < count($colorst); $i++) {
            echo '<option value="' . $_GET['id'] . " " . $colorst[$i] . '">' . $colorst[$i] . '</option>';
        }
        echo '</select>
                                      </div>
                                  </div>
                                  
                                  <div class="product-short" style="float:left">
                                    <h4>Размер:</h4>
                                      <select id="select1" name="select2" class="nice-select">';
        for ($i = 0; $i < count($sizess); $i++) {
            echo '<option value="' . $sizess[$i] . '">' . $sizess[$i] . '</option>';
        }
        echo '</select>
                                      </div>
                                    
                                      <div class="actions">
                                    
                                      <button name ="selecct" type="submit"><i class="ti-shopping-cart"></i><span>Добавить в корзину</span></button>
                                      <button type="submit" class="box" data-tooltip="Wishlist" name="selectt1"><i class="ti-heart"></i></button>
                                    
                                  </div>
                                  </form>

                                  

                                  <div class="share">

                                      <h5>Поделитесь: </h5>
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-instagram"></i></a>
                                      <a href="#"><i class="fa fa-google-plus"></i></a>

                                  </div>

                              </div>
                          </div>

                      </div>

                      <div class="row mb-60 mb-xs-40">
                          <!-- Nav tabs -->
                          <div class="col-12">
                              <ul class="pro-info-tab-list section nav">
                                  <li><a class="active" href="#more-info" data-toggle="tab">Больше информации</a></li>
                                  <li><a href="#data-sheet" data-toggle="tab">ТЕХНИЧЕСКАЯ СПЕЦИФИКАЦИЯ</a></li>
                              </ul>
                          </div>
                          <!-- Tab panes -->
                          <div class="tab-content col-12">
                              <div class="pro-info-tab tab-pane active" id="more-info">
                                  <p>' . $products["moreinfo"] . '</p>
                              </div>
                              <div class="pro-info-tab tab-pane" id="data-sheet">
                                  <table class="table-data-sheet">
                                      <tbody>
                                          <tr class="odd">
                                              <td>Качество</td>
                                              <td>' . $products["quality"] . '</td>
                                          </tr>
                                          <tr class="even">
                                              <td>Стили</td>
                                              <td>' . $products["styles"] . '</td>
                                          </tr>
                                          <tr class="odd">
                                              <td>Свойства</td>
                                              <td>' . $products["properties"] . '</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>

                      <div class="row">

                          <div class="section-title text-left col col mb-60 mb-sm-40 mb-xs-30">
                              <h1>Похожий продукт</h1>
                          </div>

                          <div class="related-product-slider related-product-slider-1 col-12 p-0">

                              <div class="col">

                                  <div class="product-item">
                                      <div class="product-inner">

                                          <div class="image">
                                              <img src="assets/images/product/product-1.jpg" alt="">

                                              <div class="image-overlay">
                                                  <div class="action-buttons">
                                                      <button>в корзину</button>
                                                      <button>в избранную</button>
                                                  </div>
                                              </div>

                                          </div>

                                          <div class="content">

                                              <div class="content-left">

                                                  <h4 class="title"><a href="single-product.php">Tmart Baby Dress</a></h4>

                                                  <div class="ratting">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star-half-o"></i>
                                                      <i class="fa fa-star-o"></i>
                                                  </div>

                                                  <h5 class="size">Размер: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                                  <h5 class="color">Цвет: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                              </div>

                                              <div class="content-right">
                                                  <span class="price">2500₸</span>
                                              </div>

                                          </div>

                                      </div>
                                  </div>

                              </div>

                              <div class="col">

                                  <div class="product-item">
                                      <div class="product-inner">

                                          <div class="image">
                                              <img src="assets/images/product/product-2.jpg" alt="">

                                              <div class="image-overlay">
                                                  <div class="action-buttons">
                                                      <button>в корзину</button>
                                                      <button>в избранную</button>
                                                  </div>
                                              </div>

                                          </div>

                                          <div class="content">

                                              <div class="content-left">

                                                  <h4 class="title"><a href="single-product.php">Jumpsuit Outfits</a></h4>

                                                  <div class="ratting">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                  </div>

                                                  <h5 class="size">Размер: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                                  <h5 class="color">Цвет: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                              </div>

                                              <div class="content-right">
                                                  <span class="price">9000₸</span>
                                              </div>

                                          </div>

                                      </div>
                                  </div>

                              </div>

                              <div class="col">

                                  <div class="product-item">
                                      <div class="product-inner">

                                          <div class="image">
                                              <img src="assets/images/product/product-3.jpg" alt="">

                                              <div class="image-overlay">
                                                  <div class="action-buttons">
                                                      <button>в корзину</button>
                                                      <button>в избранную</button>
                                                  </div>
                                              </div>

                                          </div>

                                          <div class="content">

                                              <div class="content-left">

                                                  <h4 class="title"><a href="single-product.php">Smart Shirt</a></h4>

                                                  <div class="ratting">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star-o"></i>
                                                  </div>

                                                  <h5 class="size">Размер: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                                  <h5 class="color">Цвет: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                              </div>

                                              <div class="content-right">
                                                  <span class="price">8500₸</span>
                                              </div>

                                          </div>

                                      </div>
                                  </div>

                              </div>

                              <div class="col">

                                  <div class="product-item">
                                      <div class="product-inner">

                                          <div class="image">
                                              <img src="assets/images/product/product-4.jpg" alt="">

                                              <div class="image-overlay">
                                                  <div class="action-buttons">
                                                      <button>в корзину</button>
                                                      <button>в избранную</button>
                                                  </div>
                                              </div>

                                          </div>

                                          <div class="content">

                                              <div class="content-left">

                                                  <h4 class="title"><a href="single-product.php">Kids Shoe</a></h4>

                                                  <div class="ratting">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star-half-o"></i>
                                                      <i class="fa fa-star-o"></i>
                                                  </div>

                                                  <h5 class="size">Размер: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                                  <h5 class="color">Цвет: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                              </div>

                                              <div class="content-right">
                                                  <span class="price">15000₸</span>
                                              </div>

                                          </div>

                                      </div>
                                  </div>

                              </div>

                              <div class="col">

                                  <div class="product-item">
                                      <div class="product-inner">

                                          <div class="image">
                                              <img src="assets/images/product/product-5.jpg" alt="">

                                              <div class="image-overlay">
                                                  <div class="action-buttons">
                                                      <button>в корзину</button>
                                                      <button>в избранную</button>
                                                  </div>
                                              </div>

                                          </div>

                                          <div class="content">

                                              <div class="content-left">

                                                  <h4 class="title"><a href="single-product.php"> Bowknot Bodysuit</a></h4>

                                                  <div class="ratting">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star-half-o"></i>
                                                  </div>

                                                  <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                                  <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                              </div>

                                              <div class="content-right">
                                                  <span class="price">1200₸</span>
                                              </div>

                                          </div>

                                      </div>
                                  </div>

                              </div>

                          </div>

                      </div>

                  </div>

              </div>
          </div>
      </div><!-- Page Section End -->';
        ?>


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
    <script>
        var x, i, j, l, ll, selElmnt, a, b, c;
        /*look for any elements with the class "custom-select":*/
        x = document.getElementsByClassName("custom-select");
        l = x.length;
        for (i = 0; i < l; i++) {
            selElmnt = x[i].getElementsByTagName("select")[0];
            ll = selElmnt.length;
            /*for each element, create a new DIV that will act as the selected item:*/
            a = document.createElement("DIV");
            a.setAttribute("class", "select-selected");
            a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
            x[i].appendChild(a);
            /*for each element, create a new DIV that will contain the option list:*/
            b = document.createElement("DIV");
            b.setAttribute("class", "select-items select-hide");
            for (j = 1; j < ll; j++) {
                /*for each option in the original select element,
                create a new DIV that will act as an option item:*/
                c = document.createElement("DIV");
                c.innerHTML = selElmnt.options[j].innerHTML;
                c.addEventListener("click", function(e) {
                    /*when an item is clicked, update the original select box,
                    and the selected item:*/
                    var y, i, k, s, h, sl, yl;
                    s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                    sl = s.length;
                    h = this.parentNode.previousSibling;
                    for (i = 0; i < sl; i++) {
                        if (s.options[i].innerHTML == this.innerHTML) {
                            s.selectedIndex = i;
                            h.innerHTML = this.innerHTML;
                            y = this.parentNode.getElementsByClassName("same-as-selected");
                            yl = y.length;
                            for (k = 0; k < yl; k++) {
                                y[k].removeAttribute("class");
                            }
                            this.setAttribute("class", "same-as-selected");
                            break;
                        }
                    }
                    h.click();
                });
                b.appendChild(c);
            }
            x[i].appendChild(b);
            a.addEventListener("click", function(e) {
                /*when the select box is clicked, close any other select boxes,
                and open/close the current select box:*/
                e.stopPropagation();
                closeAllSelect(this);
                this.nextSibling.classList.toggle("select-hide");
                this.classList.toggle("select-arrow-active");
            });
        }

        function closeAllSelect(elmnt) {
            /*a function that will close all select boxes in the document,
            except the current select box:*/
            var x, y, i, xl, yl, arrNo = [];
            x = document.getElementsByClassName("select-items");
            y = document.getElementsByClassName("select-selected");
            xl = x.length;
            yl = y.length;
            for (i = 0; i < yl; i++) {
                if (elmnt == y[i]) {
                    arrNo.push(i)
                } else {
                    y[i].classList.remove("select-arrow-active");
                }
            }
            for (i = 0; i < xl; i++) {
                if (arrNo.indexOf(i)) {
                    x[i].classList.add("select-hide");
                }
            }
        }
        /*if the user clicks anywhere outside the select box,
        then close all select boxes:*/
        document.addEventListener("click", closeAllSelect);
    </script>
</body>

</html>