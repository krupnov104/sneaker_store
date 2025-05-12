<?php
    // Получение и фильтрация данных
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

    // Валидация данных
    if(strlen($login) < 2) {
        die("Login error");
    }

    if(strlen($password) < 5) {
        die("Password error");
    }

    if($login === 'admin' && $password === 'admin') {
    setcookie('login', 'admin', time() + 3600 * 24 * 30, "/");
    header('Location: /pages/admin.php');
    exit();
    }

    // Хеширование пароля с солью
    $salt = '3-02954u-30495i=0)(@!*#$)';
    $hashed_password = md5($salt.$password);

    // Подключение к базе данных
    $db = mysqli_connect('localhost', 'root', '', 'shop');
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Подготовка запроса
    $sql = "SELECT id FROM users WHERE login = ? AND password = ?";
    $stmt = mysqli_prepare($db, $sql);
    
    // Привязка параметров
    mysqli_stmt_bind_param($stmt, "ss", $login, $hashed_password);
    
    // Выполнение запроса
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    // Проверка результата
    if(mysqli_stmt_num_rows($stmt) == 0) {
        echo "Такого пользователя нет";
    }
    else {
        // Успешная авторизация
        setcookie('login', $login, time() + 3600 * 24 * 30, "/");
        header('Location: /index.php');
    }

    // Закрытие соединения
    mysqli_stmt_close($stmt);
    mysqli_close($db);

//     session_start();

// // Получение и фильтрация данных
// $login = trim(filter_var($_POST['login'] ?? '', FILTER_SANITIZE_SPECIAL_CHARS));
// $password = $_POST['password'] ?? '';

// // Валидация данных
// if(strlen($login) < 4 || strlen($login) > 30) {
//     die("Логин должен быть от 4 до 30 символов");
// }

// if(strlen($password) < 7) {
//     die("Пароль должен быть не менее 7 символов");
// }

// // Подключение к базе данных
// $db = mysqli_connect('localhost', 'root', '', 'shop');
// if (!$db) {
//     die("Ошибка подключения к базе данных");
// }

// // Подготовка запроса
// $sql = "SELECT id, password FROM users WHERE login = ?";
// $stmt = mysqli_prepare($db, $sql);
// mysqli_stmt_bind_param($stmt, "s", $login);
// mysqli_stmt_execute($stmt);
// $result = mysqli_stmt_get_result($stmt);

// if($user = mysqli_fetch_assoc($result)) {
//     // Проверка пароля
//     if(password_verify($password, $user['password'])) {
//         // Успешная авторизация
//         $_SESSION['user_id'] = $user['id'];
//         $_SESSION['user_login'] = $login;
//         header('Location: /index.php');
//         exit;
//     }
// }

// // Неудачная авторизация
// $_SESSION['auth_error'] = "Неверный логин или пароль";
// header('Location: /login.php');
// exit;

// // Закрытие соединения
// mysqli_close($db);
?>