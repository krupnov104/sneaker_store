<?php

$server = "localhost";
$login = "root";
$pass = "";
$name_db = "shop";

$conect = mysqli_connect($server, $login, $pass, $name_db);

if ($conect == False) {
    echo "Ошибкка";
}


?>