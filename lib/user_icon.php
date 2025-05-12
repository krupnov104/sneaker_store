<?php
    if(isset($_COOKIE['login'])) {
        if($_COOKIE['login'] === 'admin') {
            echo '<a href="/pages/admin.php"><img src="../img/admin.png" alt="admin"></a>';
        }
        else {
            echo '<a href="/pages/user.php"><img src="../img/user.png" alt="user"></a>';
        }
    }
    else {
        echo '<a href="../pages/log_in.php"><button class="reg_button">Вход</button></a>';
    }
?>