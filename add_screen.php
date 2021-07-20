<?php
require_once('database.php');

//called by submiting a form, creates new screen insert 

if(!empty($_POST['name']) && !empty($_POST['resolution']) && !empty($_POST['panel']) && !empty($_POST['price'])){
    $_POST['name'] = htmlspecialchars($_POST['name']);
    $_POST['resolution'] = htmlspecialchars($_POST['resolution']);
    $_POST['panel'] = htmlspecialchars($_POST['panel']);
    $_POST['price'] = htmlspecialchars($_POST['price']);
    $stmt = $pdo->prepare('INSERT INTO screen (name, resolution, panel, price) VALUES (:name, :resolution, :panel, :price)');
    $stmt->execute(['name' => $_POST['name'], 'resolution' => $_POST['resolution'], 'panel' => $_POST['panel'], 'price' => $_POST['price']]);

    header('Location:index.php');
    exit();
}
