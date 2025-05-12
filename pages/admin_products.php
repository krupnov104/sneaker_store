<?php
    require_once "databases.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="/css/main_style.css">
    <link rel="stylesheet" href="/css/user.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin.css">
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

    <div class="head_main">
        
        <div class="text_head_con">
            <h2 class="text_head">
                ПАНЕЛЬ АДМИНИСТРАТОРА
            </h2>
        </div>
        
    </div>

    <div class="main">

        <div class="chapter_admin">
            
            <div class="chapter">
                <a href="orders_admin.php">ЗАКАЗЫ</a>
            </div>

            <div class="chapter">
                <a href="">ТОВАРЫ</a>
            </div>

        </div>

        <div class="main_con">
            <h3 class="chapter">Добавить новый товар</h3>

            <form action="/vendor/create.php" method="post" class="form_new" enctype="multipart/form-data">
                <p class="title">Название товара</p>
                <input type="text" name="name" class="text-field__input">

                <p class="title">Цена товара</p>
                <input type="number" name="price" class="text-field__input">

                <p class="title">Описание товара</p>
                <textarea name="description" class="text-field__input"></textarea>
                
                <p class="title">Пол</p>
                <input type="text" name="gen" class="text-field__input">

                <p class="title">Бренд товара</p>
                <input type="text" name="brend" class="text-field__input">

                <p class="title">Загрузите фото</p>
                <input type="file" name="image" accept="image/*" required>

                <p class="title">Размеры в наличии</p>
                <input type="text" name="size" class="text-field__input"><br><br>


                <button type="submit" class="text_fil_butt">Добавить новый товар</button>
            </form>
        </div>


    </div>
    

    
</body>
</html>