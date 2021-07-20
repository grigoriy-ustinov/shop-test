<?php
require_once('database.php');

//called by submiting a form, creates new cpu insert 

if(!empty($_POST['name']) && !empty($_POST['cores']) && !empty($_POST['clock']) && !empty($_POST['price'])){
    $_POST['name'] = htmlspecialchars($_POST['name']);
    $_POST['cores'] = htmlspecialchars($_POST['cores']);
    $_POST['clock'] = htmlspecialchars($_POST['clock']);
    $_POST['price'] = htmlspecialchars($_POST['price']);
    $stmt = $pdo->prepare('INSERT INTO cpu (name, cores, clock, price) VALUES (:name, :cores, :clock, :price)');
    $stmt->execute(['name' => $_POST['name'], 'cores' => $_POST['cores'], 'clock' => $_POST['clock'], 'price' => $_POST['price']]);

    header('Location:index.php');
    exit();
}
