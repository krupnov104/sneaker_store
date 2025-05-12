<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="/css/main_style.css">
    <link rel="stylesheet" href="/css/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
                        <a href=""><img src="/img/cart.png" alt="cart"></a>
                        <?php
                            if(isset($_COOKIE['login']))
                                echo '<a href="/pages/user.php"><img src="img/user.png" alt="cart"></a>';
                            else
                                echo '<a href="/pages/log_in.php"><button class="reg_button">Вход</button></a>';
                        ?>
                    </div>
                </div>
            
        </nav>        
    </header>

    

    <form method="post" action="/lib/reg.php" class="register_form">
        <div class="con_form">
            <div class="con_head_text">
                <h2 class="head_reg">
                    РЕГИСТРАЦИЯ
                </h2>
            </div>
    
            <div class="text-field">
                <input class="text-field__input contactUs__form--search" type="text" placeholder="Логин" name="login" id="login">
                <label class="contactUs__form-info">Заполните поле*</label>
            
                <input class="text-field__input contactUs__form--search" type="text" placeholder="Пароль" name="password" id="pass">
                <label class="contactUs__form-info">Заполните поле*</label>
            
                <input class="text-field__input contactUs__form--search" type="text" placeholder="Email" name="email" id="email">
                <label class="contactUs__form-info">Заполните поле*</label>
    
                <button type="submit" class="text-field__input_button">
                    Зарегистрироваться
                </button>
            </div>
        </div>
        

    </form>

    
    <div class="have_acc">
        <a href="log_in.php">
            <h3 class="have_acc_text">
                Уже есть аккаунт
            </h3>
        </a>
    </div>
</body>
</html>