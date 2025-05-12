<?php
    // Получение и фильтрация данных
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
    
    // Валидация данных
    if(strlen($login) < 2) {
        echo "Login error";
        exit;
    }

    if(strlen($password) < 5) {
        echo "Password error";
        exit;
    }

    if(strlen($email) < 4 || !strpos($email, '@')) {
        echo "Email error";
        exit;
    }
    
    // Хеширование пароля с солью
    $salt = '3-02954u-30495i=0)(@!*#$)';
    $password = md5($salt.$password);

    // Подключение к базе данных
    $db = mysqli_connect('localhost', 'root', '', 'shop');
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Подготовка запроса
    $sql = "INSERT INTO users(login, password, email) VALUES(?, ?, ?)";
    $stmt = mysqli_prepare($db, $sql);
    
    // Привязка параметров
    mysqli_stmt_bind_param($stmt, "sss", $login, $password, $email);
    
    // Выполнение запроса
    if (mysqli_stmt_execute($stmt)) {
        mysqli_close($db);
        header('Location: /index.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($db);
    }

    // Закрытие соединения
    mysqli_stmt_close($stmt);
    mysqli_close($db);
?>