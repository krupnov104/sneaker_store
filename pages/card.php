<?php
    include 'databases.php';
    include '../lib/info_product.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHURIK SHOP</title>
    <link rel="stylesheet" href="/css/main_style.css">
    <link rel="stylesheet" href="/css/card.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.0.js" integrity="sha256-zgND4db0iXaO7v4CLBIYHGoIIudWI5hRMQrPB20j0Qw=" crossorigin="anonymous"></script>
    <script src="/js/myCart.js"></script>
    <script src="/js/alert.js"></script>
    <script src="/js/size.js"></script>
</head>
<body>
 
    <header>
        <nav class="header__nav nav">
            
                <div class="nav__right-box">
                    <a href="/index.php" class="nav__logo"><img src="/img/logo.png" alt="logo"></a>
                    <ul class="nav__list">
                        <li class="nav__item"><a href="/index.php#sneakers" class="nav__link">КРОССОВКИ</a></li>
                        <li class="nav__item"><a href="" class="nav__link">АКСЕССУАРЫ</a></li>
                        <li class="nav__item"><a href="" class="nav__link">SALE</a></li>
                        <li class="nav__item"><a href="" class="nav__link">ОТЗЫВЫ</a></li>
                    </ul>
                    <div class="icon_head">
                        <a href=""><img src="/img/lupa.png" alt="lupa"></a>
                        <a href="cart.php"><img src="/img/cart.png" alt="cart"></a>
                        <?php
                            require_once "../lib/user_icon.php";
                        ?>
                        <?php if(isset($_COOKIE['login'])): ?>
                            <a href="../lib/logout.php" class="reg_button">Выйти</a>
                        <?php endif; ?>
                    </div>
                </div>
            
        </nav>        
    </header>

    <div class="main_block">

        <div class="link_back">
            <a href="javascript:history.back()" class="back"><img src="/img/left-arrow.png" alt=""></a>
        </div>

        <div class="info_product">

            <div class="img_product">
                <img src="<?= $info_product[3]?>" alt="product">
            </div>

            <div class="size_price">
                
                <div class="size_block">
                    <h2 class="name_product">
                        <?= $info_product[1]?>
                    </h2>

                    <div class="size_product">

                        <div class="grid_size">
                            <?php 

                            $sizes = [36, 37, 38, 39, 40, 41, 42, 43, 44, 45];

                            foreach ($sizes as $size): 
                                
                                $available = true;
                                $class = $available ? 'icon_size' : 'icon_size out_of_stock';
                                
                            ?>
                                <div class="<?= $class ?>" data-size="<?= $size ?>">
                                    <p><?= $size ?></p>
                                    <?php if(!$available): ?>
                                        <span class="tooltip">Нет в наличии</span>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>

                </div>

                <div class="price_product">
                    <h3 class="price">
                        <?= $info_product[2]?> руб.
                    </h3>

                    <div class="apply">
                        <input class="text_fil_butt" type="button" value="ДОБАВИТЬ" onclick="addToCart(<?= $info_product[0]?>)"></input>
                    </div>

                    <div id="alert" class="alert" style="display: none;" >
                        
                    </div>
                    
                </div>
            </div>

        </div>

        <div class="description">

            <div>
                <h2 class="name_product">
                    <?= $info_product[1]?>
                </h2>
            </div>

            <div class="text_description">
                <?= $info_product[4]?>
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
                <img src="/img/Line.png" alt="">
            </div>

            <div class="contact">
                <ul class="foot_list">
                    <li class="nav__item_foot"><span><h2>КОНТАКТЫ</h2></span></li>
                    <li class="nav__item_foot"><img src="/img/phone.png" alt="">8 (900) 777-11-22</li>
                    <li class="nav__item_foot"><img src="/img/time.png" alt="">Работаем с 10:00 до 22:00</li>
                    <li class="nav__item_foot"><img src="/img/email.png" alt="">sasakrupnov8@gmail.com</li>
                    <li class="nav__item_foot"><img src="/img/tg.png" alt=""><a href="https://t.me/shuurik_snimaet" class="foot__link">shuurik_snimaet</a></li>
                </ul>
            </div>

            <div class="line">
                <img src="/img/Line.png" alt="">
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