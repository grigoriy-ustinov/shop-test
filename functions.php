<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$basedir = __DIR__;
setSession();

function sendError(){
    if(isset($_SESSION['error_message'])){
        echo '<div class="alert alert-danger" role="alert">'.$_SESSION['error_message'].'</div>';
        unset($_SESSION['error_message']);
        die();
    }
}
//set initial values for session
function setSession(){
    if(!isset($_SESSION['cpu_list'])){
        $_SESSION['cpu_list'] = [];
    }
    if(!isset($_SESSION['ram_list'])){
        $_SESSION['ram_list'] = [];
    }
    if(!isset($_SESSION['screen_list'])){
        $_SESSION['screen_list'] = [];
    }
    if(!isset($_SESSION['cart_count'])){
        $_SESSION['cart_count'] = 0;
    }
}