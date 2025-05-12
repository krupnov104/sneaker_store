<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHURIK SHOP</title>
    <link rel="stylesheet" href="css/main_style.css">
    <script src="/js/slider.js"></script>
</head>
<body>
 
    <header>
        <nav class="header__nav nav">
            
                <div class="nav__right-box">
                    <a href="#" class="nav__logo"><img src="img/logo.png" alt="logo"></a>
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#sneakers" class="nav__link">КРОССОВКИ</a></li>
                        <li class="nav__item"><a href="" class="nav__link">АКСЕССУАРЫ</a></li>
                        <li class="nav__item"><a href="" class="nav__link">SALE</a></li>
                        <li class="nav__item"><a href="" class="nav__link">ОТЗЫВЫ</a></li>
                    </ul>
                    <div class="icon_head">
                        <a href=""><img src="img/lupa.png" alt="lupa"></a>
                        <a href="/pages/cart.php"><img src="img/cart.png" alt="cart"></a>
                        <?php
                            require_once "lib/user_icon.php";
                        ?>
                        <?php if(isset($_COOKIE['login'])): ?>
                            <a href="../lib/logout.php" class="reg_button">Выйти</a>
                        <?php endif; ?>
                    </div>
                </div>
            
        </nav>        
    </header>

    <div class="main_header">
        
        <div class="text_header">
            <h1>Шагай в стиле с нашими кроссовками!</h1>
        </div>

        <!-- <div class="header_img">
            <img src="img/head_img.png" alt="">
        </div> -->

        <div class="slider-container">
            <div class="slider">
                <div class="slide">
                    <img src="/img/slider/slide3.jpg" alt="Slide 1">
                </div>
                <div class="slide">
                    <img src="/img/slider/slide2.jpg" alt="Slide 2">
                </div>
                <div class="slide">
                    <img src="/img/slider/slide1.jpg" alt="Slide 3">
                </div>
            </div>
        </div>
       
    </div>

    <div class="main">

        <div class="main_con" id="sneakers">
            
            <div class="men_img">
                <a href="/pages/catalog_men.php"><img src="img/men.png" alt="men"></a>
            </div>

            <div class="men_img">
                <a href="/pages/catalog_women.php"><img src="img/women.png" alt="women"></a>
            </div>
        </div>

    </div>

    <footer class="footer">

        <div class="footer_con">

            <div class="users">

                <ul class="foot_list">
                    <li class="nav__item_foot"><span><h2>ПОЛЬЗОВАТЕЛЮ</h2></span></li>
                    <li class="nav__item_foot"><a href="" class="foot__link">Доставка</a></li>
                    <li class="nav__item_foot"><a href="" class="foot__link">Оплата</a></li>
                    <li class="nav__item_foot"><a href="" class="foot__link">Отзывы</a></li>
                </ul>
                
            </div>

            <div class="line">
                <img src="img/Line.png" alt="">
            </div>

            <div class="contact">
                <ul class="foot_list">
                    <li class="nav__item_foot"><span><h2>КОНТАКТЫ</h2></span></li>
                    <li class="nav__item_foot"><img src="img/phone.png" alt="">8 (900) 777-11-22</li>
                    <li class="nav__item_foot"><img src="img/time.png" alt="">Работаем с 10:00 до 22:00</li>
                    <li class="nav__item_foot"><img src="img/email.png" alt="">sasakrupnov8@gmail.com</li>
                    <li class="nav__item_foot"><img src="img/tg.png" alt=""><a href="https://t.me/shuurik_snimaet" class="foot__link">shuurik_snimaet</a></li>
                </ul>
            </div>

            <div class="line">
                <img src="img/Line.png" alt="">
            </div>

            <div class="info">

                <ul class="foot_list">
                    <li class="nav__item_foot"><span><h2>SHURIK SHOP</h2></span></li>
                    <li class="nav__item_foot" class="foot__link">SHURIK SHOP – это интернет-магазин крутых кроссовок и одежды по самым вкусным ценам. В ассортименте более 10 000 товаров – все в наличии. На сайте только реальные отзывы покупателей, которые можно проверить. Удобное оформление заказа и отзывчивая поддержка, которая поможет подобрать правильный размер.А самое главное – у нас есть бесплатная доставка и оплата при получении.</li>
                </ul>
                
            </div>
        </div>

    </footer>

</body>
</html>