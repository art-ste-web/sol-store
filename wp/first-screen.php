<?php
echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Some Of Love store</title>
    <link rel="stylesheet" href="res/dist/bootstrap/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="res/dist/bootstrap/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="res/css/style.css">
    <style>
        
    </style>
</head>
<body>
  <!-- HEADER -->
    <div class="container-fluid px-0">
        <div class="row main-navigation px-0 mx-0">
          <div class="col-3 col-md-2 col-lg-1 col-xl-1">
            <div class="logo">
            <a href="#">
              <img src="res/img/logo/round-logo.png" alt="">
            </a>
            </div>
          </div>
          <div class="col-3 col-md-8 col-lg-9 col-xl-10">
            <nav class="nav-desktop">
              <ul>
                <a href="#"><li>Главная</li></a>
                <a href="#catalog"><li>Каталог</li></a>
                <a href="about-us.html"><li>О нас</li></a>
                <a href="#"><li>О тканях</li></a>
                <a href="#"><li>Доставка</li></a>
                <a href="#"><li>Контакты</li></a>
                <a href="tel:+3809912345678"><li><img class="phone-icon" src="res/img/icons/phone-icon.svg">+3809912345678</li></a>
                <a href=""><li><img src="res/img/icons/search-icon.svg" alt=""></li></a>
              </ul>
            </nav>
          </div>
          <div class="col-6 col-md-2 col-lg-2 col-xl-1 cart-block">
            <div class="cart">
              <img src="res/img/icons/shopping-bag-icon.svg" alt="">
            </div>
            <div class="mob-menu-btn">
              <img src="res/img/icons/menu-icon.svg" alt="">
            </div>
            <div class="close-mob-menu-btn">
              <img src="res/img/icons/close-icon.svg" alt="">
            </div>
            
          </div>
          <div class="lang-switch">
            <a href="#">ru</a> | <a href="#">ua</a>
          </div>
          <div class="col-12 col-md-12">
            <nav class="nav-mobile">
              <ul>
                <a href="index.html"><li>Главная</li></a>
                <a href="#catalog"><li>Каталог</li></a>
                <a href="about-us.html"><li>О нас</li></a>
                <a href="#"><li>О тканях</li></a>
                <a href="#"><li>Доставка</li></a>
                <a href="#"><li>Контакты</li></a>
                <!-- <a href="tel:+3809912345678"><li><img class="phone-icon" src="res/img/icons/phone-icon.svg">+3809912345678</li></a> -->
                <a href=""><li><img src="res/img/icons/search-icon.svg" alt=""></li></a>
                <a href="#"><li>ru</li></a>
                <a href="#"><li>ua</li></a>
              </ul>
            </nav>
          </div>
          
        </div>
       
    </div>

    <!-- FIRST-SCREEN -->
    <div class="container-fluid first-screen">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-6 col-md-8 col-12">
                <div class="title-wrapper min-vh-100">
                    <img src="res/img/logo/transparent-logo.png" alt="Some Of Love logo">
                    <h3>Мы создаём комфорт в Вашем доме</h3>
                    <button class="shop-btn" onclick="location.href='#catalog'">В магазин</button>
                    <a class="arrow-wrapper" href="#catalog">
                      <div class="arrow-down"></div>
                    </a>
                </div>
                
            </div>
              
        </div>
       
    </div>

    <!-- CATALOG -->
    <div class="container content-block">
        <div class="row">
          <div class="col-12">
            <h2 id="catalog" class="text-center">Каталог товаров</h2>
          </div>
        </div>
        <div class="row categories-block">
            <div class="category-card col-lg-2 col-md-4 col-sm-6 col-6 px-2 py-2">
              <a href="category.html">
                <div class="c-card bed-linen">
                    <h3>Постельное белье</h3>
                </div>
              </a>
            </div>
            <div class="category-card col-lg-2 col-md-4 col-sm-6 col-6 px-2 py-2">
              <a href="category.html">
                <div class="c-card pillowcases">
                    <h3>Наволочки и простыни</h3>
                </div>
              </a>
            </div>
            <div class="category-card col-lg-2 col-md-4 col-sm-6 col-6 px-2 py-2">
              <a href="category.html">
                <div class="c-card covers">
                  <h3>Покрывала и пледы</h3>
                </div>
              </a>
            </div>
            <div class="category-card col-lg-2 col-md-4 col-sm-6 col-6 px-2 py-2">
              <a href="category.html">
                <div class="c-card towels">
                  <h3>Полотенца</h3>
                </div>
              </a>
            </div>
            <div class="category-card col-lg-2 col-md-4 col-sm-6 col-6 px-2 py-2">
              <a href="category.html">
                <div class="c-card carpets">
                  <h3>Коврики</h3>
                </div>
              </a>
            </div>
            <div class="category-card col-lg-2 col-md-4 col-sm-6 col-6 px-2 py-2">
              <a href="category.html">
                <div class="c-card bathrobes">
                  <h3>Халаты</h3>
                </div>
              </a>
            </div>
        </div>

        <!-- ABOUT -->
        <div class="row about-block">
          <div class="col-12 col-lg-6 col-xl-6 px-2">
            <div class="about-card about-us">
              <h3 class="text-center">О нас</h3>
              <p>
                <b>Some Of Love</b> - это не просто украинский бренд натурального постельного белья,
                 это о любви. С 2016 года мы работаем и совершенствуемся для тех, кто ценит комфорт
                и стремится к уюту и гармонии. 
              </p>
              <a href="about-us.html">
                <button>Узнать больше</button>
              </a>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-6 px-2">
            <div class="about-card about-cloth">
              <h3 class="text-center">О наших тканях</h3>
              <p>
                Мы уверены, что качество постельного белья определяет качество сна. Именно поэтому
                мы объездили полмира и нашли лучшие натуральные ткани, чтобы подарить Вам о-настоящему 
                здоровый и крепкий сон и нашу заботу.
              </p>
              <a href="about-us.html">
                <button>Узнать больше</button>
              </a>
            </div>
          </div>
        </div>

        <!-- NEW PRODUCTS -->
        <div class="row">
          <div class="col-12">
            <h2 class="text-center">Новые поступления</h2>
          </div>
        </div>
        <div class="row products">
          <div class="col-12 col-md-6 col-lg-3 col-xl-3 px-2">
            <a href="product.html">
              <div class="product-card p-card-1">
                <img src="res/img/products/pdoduct-1.jpg" alt="">
                <div class="product-data">
                  <h3>Комплект SoundSleep Stonewash Adriatic Peach</h3>
                  <p>Мягкая постель из 100% вареного хлопка</p>
                  <div class="price">2400₴</div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-3 col-xl-3 px-2">
            <a href="product.html">
              <div class="product-card p-card-2">
                <img src="res/img/products/pdoduct-2.jpg" alt="">
                <div class="product-data">
                  <h3>Комплект SoundSleep Stonewash Adriatic Peach</h3>
                  <p>Мягкая постель из 100% вареного хлопка</p>
                  <div class="price">2400₴</div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-3 col-xl-3 px-2">
            <a href="product.html">
              <div class="product-card p-card-3">
                <img src="res/img/products/pdoduct-3.jpg" alt="">
                <div class="product-data">
                  <h3>Комплект SoundSleep Stonewash Adriatic Peach</h3>
                  <p>Мягкая постель из 100% вареного хлопка</p>
                  <div class="price">2400₴</div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-3 col-xl-3 px-2">
            <a href="product.html">
              <div class="product-card p-card-4">
                <img src="res/img/products/pdoduct-4.jpg" alt="">
                <div class="product-data">
                  <h3>Комплект SoundSleep Stonewash Adriatic Peach</h3>
                  <p>Мягкая постель из 100% вареного хлопка</p>
                  <div class="price">2400₴</div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <!-- POPULAR PRODUCTS -->
        <div class="row">
          <div class="col-12">
            <h2 class="text-center">Популярные товары</h2>
          </div>
        </div>
        <div class="row products">
          <div class="col-12 col-md-6 col-lg-3 col-xl-3 px-2">
            <a href="product.html">
              <div class="product-card p-card-1">
                <img src="res/img/products/pdoduct-5.jpg" alt="">
                <div class="product-data">
                  <h3>Комплект SoundSleep Stonewash Adriatic Peach</h3>
                  <p>Мягкая постель из 100% вареного хлопка</p>
                  <div class="price">2400₴</div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-3 col-xl-3 px-2">
            <a href="product.html">
              <div class="product-card p-card-2">
                <img src="res/img/products/pdoduct-6.jpg" alt="">
                <div class="product-data">
                  <h3>Комплект SoundSleep Stonewash Adriatic Peach</h3>
                  <p>Мягкая постель из 100% вареного хлопка</p>
                  <div class="price">2400₴</div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-3 col-xl-3 px-2">
            <a href="product.html">
              <div class="product-card p-card-3">
                <img src="res/img/products/pdoduct-7.jpg" alt="">
                <div class="product-data">
                  <div class="color-vars">
                    <div class="color color-1"></div>
                    <div class="color color-2"></div>
                    <div class="color color-3"></div>
                  </div>
                  <h3>Покрывало Betires Bremen Mustard</h3>
                  <p>Покрывало наполнит ваш дом уютом, красотой и очарованием</p>
                  <div class="price">1560₴</div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-3 col-xl-3 px-2">
            <a href="product.html">
              <div class="product-card p-card-4">
                <img src="res/img/products/pdoduct-8.jpg" alt="">
                <div class="product-data">
                  <h3>Комплект SoundSleep Stonewash Adriatic Peach</h3>
                  <p>Мягкая постель из 100% вареного хлопка</p>
                  <div class="price">2400₴</div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- ADVANTAGES -->
        <div class="row advantages">
          <div class="col-12 col-md-6 col-lg-3 col-xl-3 px-2">
            <img src="res/img/advantages/adv-1.jpg" alt="">
            <p class="text-center">Высокое качество</p>
          </div>
          <div class="col-12 col-md-6 col-lg-3 col-xl-3 px-2">
            <img src="res/img/advantages/adv-2.jpg" alt="">
            <p class="text-center">Натуральные материалы</p>
          </div>
          <div class="col-12 col-md-6 col-lg-3 col-xl-3 px-2">
            <img src="res/img/advantages/adv-3.jpg" alt="">
            <p class="text-center">Бесплатная доставка</p>
          </div>
          <div class="col-12 col-md-6 col-lg-3 col-xl-3 px-2">
            <img src="res/img/advantages/adv-4.jpg" alt="">
            <p class="text-center">Наложенный платеж</p>
          </div>
        </div>


    </div>

    <!-- FOOTER -->
    <div class="container-fluid">
      <div class="row footer">
        <div class="col-12 col-lg-3 col-xl-3">
          <h4>О нас</h4>
          <p><b>Some Of Love</b>  — это украинский бренд
            постельного белья, который был создан
            в 2016 году, чтобы улучшить качество
            вашего сна и сделать ваш дом
            как можно более уютным.
          </p>
        </div>
        <div class="col-12 col-lg-3 col-xl-3">
          <h4>Каталог товаров</h4>
          <ul>
            <a href="category.html"><li>Постельное белье</li></a>
            <a href="category.html"><li>Наволочки и простыни</li></a>
            <a href="category.html"><li>Покрывала и пледы</li></a>
            <a href="category.html"><li>Полотенца</li></a>
            <a href="category.html"><li>Коврики</li></a>
            <a href="category.html"><li>Халаты</li></a>
          </ul>
        </div>
        <div class="col-12 col-lg-3 col-xl-3">
          <h4>Информация</h4>
          <ul>
            <a href="about-us.html"><li>О нас</li></a>
            <a href="#"><li>О наших тканях</li></a>
            <a href="#"><li>Доставка</li></a>
          </ul>
        </div>
        <div class="col-12 col-lg-3 col-xl-3">
          <h4>Контакты</h4>
          <a class="phone-number" href="tel:+3809912345678">
            <img class="phone-icon" src="res/img/icons/phone-icon.svg">
            +38(099)12345678
          </a>
          <div class="social-links">
            <a href="https://www.instagram.com/some.of.love.ua/">
              <img src="res/img/icons/instagram.svg" alt="">
            </a>
            <a href="">
              <img src="res/img/icons/telegram.svg" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>

    <script src="res/dist/jquery-3.5.1.min.js"></script>
    <script src="res/dist/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="res/js/main.js"></script>
</body>
</html>
HTML;

?>