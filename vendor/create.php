<?php

require_once "../pages/databases.php";

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$gen = $_POST['gen'];
$brend = $_POST['brend'];
$size = $_POST['size'];

$upload_dir = '../img/goods';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Проверка, что файл был загружен
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_name = basename($_FILES['image']['name']);
        $file_path = $upload_dir . uniqid() . '_' . $file_name; // Добавляем уникальный ID к имени
        
        // Перемещение файла в целевую папку
        if (move_uploaded_file($file_tmp, $file_path)) {
            // Запись пути в базу данных
            $stmt = $conect->prepare("INSERT INTO `goods` (`image`) VALUES (?)");
            $stmt = mysqli_query($conect, "INSERT INTO `goods` (`name`, `price`, `image`, `description`, `size`, `gen`, `brend`) VALUES ('$name', '$price', '$file_path', '$description', '$size', '$gen', '$brend')");
            header('Location: /pages/admin_products.php');  
        } else {
            die('Ошибка при загрузке файла');
        }
    } else {
        die('Ошибка: Файл не был загружен');
    }
}


?>