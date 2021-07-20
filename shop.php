<?php
require_once('database.php');
require_once('functions.php');
//Get requests to add items to shopping cart
//session_destroy();
if(isset($_GET['type']) && isset($_GET['id'])){
    check_ducpicates($_GET['id'],$_GET['type']);
    if($_GET['type'] == 'cpu'){
        array_push($_SESSION['cpu_list'], ['name' => $_GET['name'],
                                    'id' => $_GET['id'], 
                                    'cores' => $_GET['cores'],
                                    'clock' => $_GET['clock'],
                                    'price' => $_GET['price'],
                                    'quantity' => 1]);
    }elseif($_GET['type'] == 'ram'){
        array_push($_SESSION['ram_list'], ['name' => $_GET['name'],
                                    'id' => $_GET['id'], 
                                    'latency' => $_GET['latency'],
                                    'clock' => $_GET['clock'],
                                    'price' => $_GET['price'],
                                    'quantity' => 1]);
    }elseif($_GET['type'] == 'screen'){
        array_push($_SESSION['screen_list'], ['name' => $_GET['name'],
                                    'id' => $_GET['id'], 
                                    'resolution' => $_GET['resolution'],
                                    'panel' => $_GET['panel'],
                                    'price' => $_GET['price'],
                                    'quantity' => 1]);
    }
    $_SESSION['cart_count']++;
    header('Location:index.php');
    exit();
    
}
//if item alreay in the cart increase quantity and reload
function check_ducpicates($id, $type){
    if($type == 'cpu'){
        foreach($_SESSION['cpu_list'] as &$item){
            if($item['id'] == $id){
                $_SESSION['cart_count']++;
                $item['quantity']++;
                header('Location:index.php');
                exit();
            }
        }
    }
    if($type == 'ram'){
        foreach($_SESSION['ram_list'] as &$item){
            if($item['id'] == $id){
                $_SESSION['cart_count']++;
                $item['quantity']++;
                header('Location:index.php');
                exit();
            }
        }
    }
    if($type == 'screen'){
        foreach($_SESSION['screen_list'] as &$item){
            if($item['id'] == $id){
                $_SESSION['cart_count']++;
                $item['quantity']++;
                header('Location:index.php');
                exit();
            }
        }
    }
}


//Get all the CPU records 
$stmt =$pdo->prepare('SELECT id, name, cores, clock, price FROM cpu');
$stmt->execute();
$result = $stmt->fetchAll();
if(empty($result)){
    echo    '<div class="alert alert-warning" role="alert">
                <h4 class="alert-heading">The database is empty!</h4>
                <hr>
            </div>';
}else{
    echo '<h3> List of all available products </h3>';
    echo '<table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Cores</th>
                <th scope="col">Clock</th>
                <th scope="col">Price</th>
                <th scope="col">Buy</th>
            </tr>
            </thead>
            <tbody>';
    foreach ($result as $item){
        echo <<<EX
                <tr>
                    <th scope="row">1</th>
                    <td>{$item['name']}</td>
                    <td>{$item['cores']}</td>
                    <td>{$item['clock']}</td>
                    <td>{$item['price']}</td>
                    <td><a type="button" id="buy_button" class="btn btn-light" href="shop.php?type=cpu&id={$item['id']}&name={$item['name']}&cores={$item['cores']}&clock={$item['clock']}&price={$item['price']}">Add</a></td>
                </tr>
        EX;
    }
    echo '</tbody>
        </table>';
}


//Get all the RAM records 
$stmt =$pdo->prepare('SELECT id, name, latency, clock, price FROM ram');
$stmt->execute();
$result = $stmt->fetchAll();
if(empty($result)){
    echo '<h3> List of all available ram </h3>';
    echo    '<div class="alert alert-warning" role="alert">
                <h4 class="alert-heading">The database is empty!</h4>
                <hr>
            </div>';
}else{
    echo '<table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Latency</th>
                <th scope="col">Clock</th>
                <th scope="col">Price</th>
                <th scope="col">Buy</th>
            </tr>
            </thead>
            <tbody>';
    foreach ($result as $item){
        echo <<<EX
                <tr>
                    <th scope="row">1</th>
                    <td>{$item['name']}</td>
                    <td>{$item['latency']}</td>
                    <td>{$item['clock']}</td>
                    <td>{$item['price']}</td>
                    <td><a type="button" id="buy_button" class="btn btn-light" href="shop.php?type=ram&id={$item['id']}&name={$item['name']}&latency={$item['latency']}&clock={$item['clock']}&price={$item['price']}">Add</a></td>
                </tr>
        EX;
    }
    echo '</tbody>
        </table>';
}


//Get all the screen records 
$stmt =$pdo->prepare('SELECT id, name, resolution, panel, price FROM screen');
$stmt->execute();
$result = $stmt->fetchAll();
if(empty($result)){
    echo '<h3> List of all available screens </h3>';
    echo    '<div class="alert alert-warning" role="alert">
                <h4 class="alert-heading">The database is empty!</h4>
                <hr>
            </div>';
}else{
    echo '<table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Resolution</th>
                <th scope="col">Panel</th>
                <th scope="col">Price</th>
                <th scope="col">Buy</th>
            </tr>
            </thead>
            <tbody>';
    foreach ($result as $item){
        echo <<<EX
                <tr>
                    <th scope="row">1</th>
                    <td>{$item['name']}</td>
                    <td>{$item['resolution']}</td>
                    <td>{$item['panel']}</td>
                    <td>{$item['price']}</td>
                    <td><a type="button" id="buy_button" class="btn btn-light" href="shop.php?type=screen&id={$item['id']}&name={$item['name']}&resolution={$item['resolution']}&panel={$item['panel']}&price={$item['price']}">Add</a></td>
                </tr>
        EX;
    }
    echo '</tbody>
        </table>';
}