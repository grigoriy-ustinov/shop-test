<?php
require_once('database.php');

//called by submiting a form, creates new ram insert 

if(!empty($_POST['name']) && !empty($_POST['latency']) && !empty($_POST['clock']) && !empty($_POST['price'])){
    $_POST['name'] = htmlspecialchars($_POST['name']);
    $_POST['latency'] = htmlspecialchars($_POST['latency']);
    $_POST['clock'] = htmlspecialchars($_POST['clock']);
    $_POST['price'] = htmlspecialchars($_POST['price']);
    $stmt = $pdo->prepare('INSERT INTO ram (name, latency, clock, price) VALUES (:name, :latency, :clock, :price)');
    $stmt->execute(['name' => $_POST['name'], 'latency' => $_POST['latency'], 'clock' => $_POST['clock'], 'price' => $_POST['price']]);

    header('Location:index.php');
    exit();
}
