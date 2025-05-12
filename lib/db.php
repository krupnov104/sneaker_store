<?php
// Параметры подключения
$host = 'localhost';    // или '127.0.0.1'
$user = 'root';         // пользователь MySQL
$password = '';         // пароль (в OpenServer по умолчанию пустой)
$database = 'shop';     // имя базы данных


// Устанавливаем соединение
$connection = mysqli_connect($host, $user, $password, $database);

// Проверяем соединение
if (!$connection) {
    die("Ошибка подключения к MySQL: " . mysqli_connect_error());
}

// Устанавливаем кодировку
mysqli_set_charset($connection, 'utf8');

// Закрываем соединение (обычно делается в конце скрипта)
mysqli_close($connection);
?>