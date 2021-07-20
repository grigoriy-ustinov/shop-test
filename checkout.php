<?php
include('header.php');
//var_dump($_SESSION['cpu_list']);
//print("<pre>".print_r($_SESSION,true)."</pre>");

//display shopping cart 
$totalPrice = 0;
if(isset($_SESSION['cart_count']) && $_SESSION['cart_count'] > 0){
    if(isset($_SESSION['cpu_list']) && !empty($_SESSION['cpu_list'])){
        echo '<h3> List of cpu to order</h3>';
        echo '<table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Cores</th>
                <th scope="col">Clock</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
            </tr>
            </thead>
            <tbody>';
    foreach ($_SESSION['cpu_list'] as $item){
        $totalPrice += $item['price'] * $item['quantity'];
        echo <<<EX
                <tr>
                    <th scope="row">1</th>
                    <td>{$item['name']}</td>
                    <td>{$item['cores']}</td>
                    <td>{$item['clock']}</td>
                    <td>{$item['price']}</td>
                    <td>{$item['quantity']}</td>
                </tr>
        EX;
    }
    echo '</tbody>
        </table>';
    }
    if(isset($_SESSION['ram_list']) && !empty($_SESSION['ram_list'])){
        echo '<h3> List of ram to order</h3>';
        echo '<table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Latency</th>
                <th scope="col">Clock</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
            </tr>
            </thead>
            <tbody>';
    foreach ($_SESSION['ram_list'] as $item){
        $totalPrice += $item['price'] * $item['quantity'];
        echo <<<EX
                <tr>
                    <th scope="row">1</th>
                    <td>{$item['name']}</td>
                    <td>{$item['latency']}</td>
                    <td>{$item['clock']}</td>
                    <td>{$item['price']}</td>
                    <td>{$item['quantity']}</td>
                </tr>
        EX;
    }
    echo '</tbody>
        </table>';
    }
    if(isset($_SESSION['screen_list']) && !empty($_SESSION['screen_list'])){
        echo '<h3> List of screens to order</h3>';
        echo '<table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Resolution</th>
                <th scope="col">Panel</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
            </tr>
            </thead>
            <tbody>';
    foreach ($_SESSION['screen_list'] as $item){
        $totalPrice += $item['price'] * $item['quantity'];
        echo <<<EX
                <tr>
                    <th scope="row">1</th>
                    <td>{$item['name']}</td>
                    <td>{$item['resolution']}</td>
                    <td>{$item['panel']}</td>
                    <td>{$item['price']}</td>
                    <td>{$item['quantity']}</td>
                </tr>
        EX;
    }
    echo '</tbody>
        </table>';
    }
}
if($_SESSION['cart_count'] > 0){
    //form to place orders
    echo <<<EX
            <div class="formcontainer">
                <form method="POST" action="place_order.php">
                    <div class="mb-3">
                        <div class="form-group">
                            <h3>Place order</h3>
                            <label for="name">Customer name</label>
                            <input type="text" class="form-control" id="name" name ="name">
                            <input type="hidden" class="form-control" id="price" name ="price" value="{$totalPrice}">
                        </div>
                    </div>
                    <p> Place order for {$_SESSION['cart_count']} items with a total price of {$totalPrice} </p>
                    <button type="submit" name="action" value="create_post" class="btn btn-primary">Place order</button>
                </form>
            </div>
    EX;
}else{
    echo "<h4>No items in the shopping cart yet</h4>";
}




include('footer.php');