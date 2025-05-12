<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="/css/main_style.css">
    <link rel="stylesheet" href="/css/cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.0.js" integrity="sha256-zgND4db0iXaO7v4CLBIYHGoIIudWI5hRMQrPB20j0Qw=" crossorigin="anonymous"></script>
    <script src="/js/myCart.js"></script>
    <script src="/js/size.js"></script>
</head>
<body onload="showMyCart()">

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
                        <a href=""><img src="/img/cart.png" alt="cart"></a>
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

    <div class="head_main">
        
        <div class="text_head_con">
            <h2 class="text_head">
                КОРЗИНА
            </h2>   
        </div>

        <div class="clear">
            <!-- <div class="clear_text">
                <p>Пока ваша корзина пуста</p>
            </div> -->
        </div>

        <div class="main_block">

            <div class="info_product" class="in-check" id="in-check">

                

            </div>

        </div>
        
    </div>

</body>
</html>