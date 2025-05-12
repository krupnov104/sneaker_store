<?php
    include 'databases.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main_style.css">
    <link rel="stylesheet" href="/css/catalog.css">
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

    <div class="main_head">
        <div class="container">
            <div>
                <img src="/img/men.png" alt="">
            </div>
        </div>
    </div>
    
    <div class="main">
        
        <div class="filter">

            <div>
                <div class="size">
                    <div><p class="text_fil">Размер обуви</p></div>
                </div>
    
                <div class="grid_size">
    
                    <div class="icon_size">
                        <p>36</p>
                    </div>
    
                    <div class="icon_size">
                        <p>37</p>
                    </div>
    
                    <div class="icon_size">
                        <p>38</p>
                    </div>
    
                    <div class="icon_size">
                        <p>39</p>
                    </div>
    
                    <div class="icon_size">
                        <p>40</p>
                    </div>
    
                    <div class="icon_size">
                        <p>41</p>
                    </div>
    
                    <div class="icon_size">
                        <p>42</p>
                    </div>
    
                    <div class="icon_size">
                        <p>43</p>
                    </div>
    
                    <div class="icon_size">
                        <p>44</p>
                    </div>

                    <div class="icon_size">
                        <p>45</p>
                    </div>
    
                </div>
            </div>
            
            <div class="brand">

                <div>
                    <div><p class="text_fil">Бренд</p></div>
                </div>

                <div>
                    <ul class="brand_list">
                        <label class="li_brand"><input type="checkbox" class="checkbox"/>Nike</label>
                        <label class="li_brand"><input type="checkbox" class="checkbox"/>Adidas</label>
                        <label class="li_brand"><input type="checkbox" class="checkbox"/>New Balance</label>
                    </ul>
                </div>

            </div>

            <div>
                <div>
                    <div><p class="text_fil">Стиль</p></div>
                </div>

                <div>
                    <ul class="brand_list">
                        <label class="li_brand"><input type="checkbox" class="checkbox"/>Баскетбол</label>
                        <label class="li_brand"><input type="checkbox" class="checkbox"/>Бег</label>
                        <label class="li_brand"><input type="checkbox" class="checkbox"/>Лайфстайл</label>
                    </ul>
                </div>
            </div>

            <div>

                <div>
                    <div><p class="text_fil">Цена</p></div>
                </div>

                <div class="price">

                    <div class="text-field">
                        <input class="text-field__input" type="number" id="from" placeholder="От">
                    </div>
                    
                    <div class="text-field">
                        <input class="text-field__input" type="number" id="before" placeholder="До">
                    </div>
                    
                </div>
                
            </div>

            <div class="buttons">

                <div class="apply">
                    <button class="text_fil_butt">ПОКАЗАТЬ</button>
                </div>

                <div class="reset">
                    <button class="text_fil_butt_res">СБРОСИТЬ</button>
                </div>

            </div>

        </div>

        <div class="catalog_con">

            <div class="catalog">
                
                <?php
                    $products = mysqli_query($conect, "SELECT * FROM `goods` WHERE gen = 'men' OR gen = 'men women' OR gen = 'women men'");
                    $products = mysqli_fetch_all($products);

                    foreach ($products as $product) {
                        ?>
                            <a href="card.php?id=<?= $product[0]?>">
                                <div class="product" id="<?= $product[0]?>"  class="card_product_from">

                                    <img src="<?= $product[3]?>" alt="">

                                    <div class="name_price">
                                        
                                        <p class="product_price"><?= $product[2]?> руб.</p>

                                        <h2 class="name_product"><?= $product[1]?></h2>

                                    </div>
                               
                                </div>
                            </a>
                        <?php
                    }
                ?>

            </div>

        </div>


    </div>

</body>
</html>