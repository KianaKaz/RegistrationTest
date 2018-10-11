<?php

function redirect($url){
    header("location:".$url);
    die();
}


function vd($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit();
}


function user(){
    return $_SESSION['loginStatus'];
}
function Address(){
    return $_SESSION['AddressStore'];
}
function payment(){
    return $_SESSION['PaymentStatus'];
}


function view($template,$args=[]){
    return \Core\View::render($template,$args);
}



