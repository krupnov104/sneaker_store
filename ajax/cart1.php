<!DOCTYPE html>
<html>
<head>
    <title>Корзина</title>
<style> 
   .cart-column {
    display: flex;
    flex-direction: column;
    gap: 30px;
    max-width: 900px;
    margin: 0 auto;
    padding: 30px;
}

.cart-item {
    display: flex;
    gap: 30px;
    padding: 25px;
    border: 1px solid #eee;
    border-radius: 12px;
    background: #fff;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.item-image {
    width: 180px;
    height: 180px;
    min-width: 180px;
}

.item-image img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.item-details {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 15px;
    justify-content: center;
}

.item-name {
    margin: 0;
    font-size: 24px;
    color: #333;
    font-weight: 600;
}

.item-price {
    font-weight: bold;
    font-size: 22px;
    color:rgb(73, 73, 73);
}

.item-quantity {
    font-size: 20px;
    color: #666;
}

.item-actions {
    display: flex;
    gap: 15px;
    margin-top: 15px;
}

.buy-btn, .remove-btn {
    padding: 12px 25px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 18px;
    transition: all 0.3s ease;
}

.buy-btn {
    background-color:rgb(0, 0, 0);
    color: white;
}

.buy-btn:hover {
    background-color: #3e8e41;
}

.remove-btn {
    background-color:rgb(0, 0, 0);
    color: white;
}

.remove-btn:hover {
    background-color: #d32f2f;
}

.empty-cart {
    text-align: center;
    padding: 60px;
    font-size: 24px;
    color: #666;
}
</style>
</head>
<body>

<?php
// session_start();

// $server = "localhost";
// $login = "root";
// $pass = "";
// $name_db = "shop";

// $mysqli = new mysqli($server, $login, $pass, $name_db);

// if ($mysqli->connect_error) {
//     die("Ошибка подключения: " . $mysqli->connect_error);
// }

// if (!isset($_POST["action"])) {
//     die("Не указано действие");
// }

// $action = $_POST["action"];

// if ($action == 'show') {
//     if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
//         echo '<div class="empty-cart">У вас нет заказов</div>';
//         exit;
//     }
    
//     echo '<div class="cart-column">'; // Общий контейнер для товаров
    
//     $cart = $_SESSION['cart'];
    
//     foreach ($cart as $productId => $item) {
//         if (!isset($item['quantity'])) {
//             $item = [
//                 'idProduct' => $item['idProduct'] ?? $productId,
//                 'quantity' => 1
//             ];
//             $_SESSION['cart'][$productId] = $item;
//         }

//         $stmt = $mysqli->prepare('SELECT * FROM goods WHERE id = ?');
//         $stmt->bind_param('i', $productId);
//         $stmt->execute();
//         $results = $stmt->get_result();
        
//         while ($row = $results->fetch_assoc()) {
//             echo '
//             <div class="cart-item">
//                 <div class="item-image">
//                     <img src="'.htmlspecialchars($row["image"]).'" alt="'.htmlspecialchars($row["name"]).'">
//                 </div>
//                 <div class="item-details">
//                     <h3 class="item-name">'.htmlspecialchars($row["name"]).'</h3>
//                     <div class="item-price">'.htmlspecialchars($row["price"]).' руб.</div>
//                     <div class="item-quantity">Количество: '.$item['quantity'].'</div>
//                     <div class="item-actions">
//                         <button class="buy-btn">КУПИТЬ</button>
//                         <button class="remove-btn" onclick="delFromCart('.$row["id"].')">УДАЛИТЬ (1 шт.)</button>
//                     </div>
//                 </div>
//             </div>';
//         }
//         $stmt->close();
//     }
    
//     echo '</div>'; // Закрываем контейнер
    
// } elseif ($action == 'add') {
//     if (!isset($_SESSION['cart'])) {
//         $_SESSION['cart'] = [];
//     }
    
//     if (!isset($_POST['id'])) {
//         die("Не указан ID товара");
//     }
    
//     $id = (int)$_POST['id'];
    
//     if (isset($_SESSION['cart'][$id])) {
//         $_SESSION['cart'][$id]['quantity']++;
//     } else {
//         $_SESSION['cart'][$id] = [
//             'idProduct' => $id,
//             'quantity' => 1
//         ];
//     }
    
// } elseif ($action == 'del') {
//     if (!isset($_POST['id'])) {
//         die("Не указан ID товара");
//     }
    
//     $id = (int)$_POST["id"];
    
//     if (isset($_SESSION['cart'][$id])) {
//         $_SESSION['cart'][$id]['quantity']--;
        
//         if ($_SESSION['cart'][$id]['quantity'] <= 0) {
//             unset($_SESSION['cart'][$id]);
//         }
//     }
// } else {
//     die("Неизвестное действие");
// }

// $mysqli->close();
session_start();

$server = "localhost";
$login = "root";
$pass = "";
$name_db = "shop";

$mysqli = new mysqli($server, $login, $pass, $name_db);

if ($mysqli->connect_error) {
    die("Ошибка подключения: " . $mysqli->connect_error);
}

if (!isset($_POST["action"])) {
    die("Не указано действие");
}

$action = $_POST["action"];

if ($action == 'show') {
    if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
        echo '<div class="empty-cart">У вас нет заказов</div>';
        exit;
    }

    echo '<div class="cart-column">';
    
    $cart = $_SESSION['cart'];


    foreach ($cart as $productId => $item) {
        if (!isset($item['quantity'])) {
            $item = [
                'idProduct' => $item['idProduct'] ?? $productId,
                'quantity' => 1,
                'size' => $item['size'] ?? null
            ];
            $_SESSION['cart'][$productId] = $item;
        }

        $stmt = $mysqli->prepare('SELECT * FROM goods WHERE id = ?');
        $stmt->bind_param('i', $productId);
        $stmt->execute();
        $results = $stmt->get_result();
        
        while ($row = $results->fetch_assoc()) {
            echo '
            <div class="cart-item">
                <div class="item-image">
                    <img src="'.htmlspecialchars($row["image"]).'" alt="'.htmlspecialchars($row["name"]).'">
                </div>
                <div class="item-details">
                    <h3 class="item-name">'.htmlspecialchars($row["name"]).'</h3>
                    <div class="item-price">'.htmlspecialchars($row["price"]).' руб.</div>
                    <div class="item-quantity">Количество: '.$item['quantity'].'</div>
                    <div class="item-size">Размер: '.($item['size'] ?? 'не указан').'</div>
                    <div class="item-actions">
                        <button class="buy-btn">КУПИТЬ</button>
                        <button class="remove-btn" onclick="delFromCart('.$row["id"].')">УДАЛИТЬ (1 шт.)</button>
                    </div>
                </div>
            </div>';
        }
        $stmt->close();
    }
    
    echo '</div>';
    
} elseif ($action == 'add') {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    
    if (!isset($_POST['id'])) {
        die("Не указан ID товара");
    }
    
    $id = (int)$_POST['id'];
    $size = isset($_POST['size']) ? (int)$_POST['size'] : null;
    
    // Проверяем, есть ли уже такой товар с таким же размером в корзине
    $found = false;
    foreach ($_SESSION['cart'] as $productId => $item) {
        if ($productId == $id && isset($item['size']) && $item['size'] == $size) {
            $_SESSION['cart'][$productId]['quantity']++;
            $found = true;
            break;
        }
    }
    
    if (!$found) {
        $_SESSION['cart'][$id] = [
            'idProduct' => $id,
            'quantity' => 1,
            'size' => $size
        ];
    }
    
} elseif ($action == 'del') {
    if (!isset($_POST['id'])) {
        die("Не указан ID товара");
    }
    
    $id = (int)$_POST["id"];
    $size = isset($_POST['size']) ? (int)$_POST['size'] : null;
    
    if (isset($_SESSION['cart'][$id])) {
        
            // Если размер не указан, работаем как раньше
            $_SESSION['cart'][$id]['quantity']--;
            
            if ($_SESSION['cart'][$id]['quantity'] <= 0) {
                unset($_SESSION['cart'][$id]);
            }
        }
    }
else {
    die("Неизвестное действие");
}

$mysqli->close();
?>

</body>
</html>
