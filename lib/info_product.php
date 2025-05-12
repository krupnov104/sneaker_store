<?php

require_once 'db.php';

$id = $_GET['id'];

    $product = mysqli_query($conect, "SELECT * FROM goods WHERE id = $id");
    $product = mysqli_fetch_all($product);
    foreach($product as $info_product) {
        
    };

?>