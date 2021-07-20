<?php
require_once('database.php');

function add_items_per_orders($type, $item, $orderId, $pdo){
    $stmt = $pdo->prepare('INSERT INTO items_per_orders (order_id, item_id, item_type, quantity) VALUES (:order_id, :item_id, :item_type, :quantity)');
    $stmt->execute(['order_id' => $orderId, 'item_id' => $item['id'], 'item_type' => $type, 'quantity' => $item['quantity']]);
    echo "<p>Adding ".$type. " with id ". $item['id'] . " with quantity " . $item['quantity'] . " to orderId " .$orderId; 
}

//Create orders insert and get its id

if(!empty($_POST['name'])){
    $stmt = $pdo->prepare('INSERT INTO orders (customer_name, price) VALUES (:name, :price)');
    $stmt->execute(['name' => $_POST['name'], 'price' => $_POST['price']]);

    $orderId = $pdo->lastInsertId();


    //loop through items to 
    if(!empty($_SESSION['cpu_list'])){
        foreach ($_SESSION['cpu_list'] as $item){
            add_items_per_orders('cpu', $item, $orderId, $pdo);
        }
    }

    if(!empty($_SESSION['ram_list'])){
        foreach ($_SESSION['ram_list'] as $item){
            add_items_per_orders('ram', $item, $orderId, $pdo);
        }
    }
    if(!empty($_SESSION['screen_list'])){
        foreach ($_SESSION['screen_list'] as $item){
            add_items_per_orders('screen', $item, $orderId, $pdo);
        }
    }
}

print("<pre>".print_r($_SESSION,true)."</pre>");
unset($_SESSION['cpu_list']);
unset($_SESSION['ram_list']);
unset($_SESSION['screen_list']);
$_SESSION['cart_count'] = 0;

//header('Location:index.php');
//exit();
