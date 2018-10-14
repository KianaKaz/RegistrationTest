<?php
session_start();
/*
 * Require All File With Composer
 */
require '../vendor/autoload.php';
error_reporting(E_ALL);
set_error_handler('\Core\Error::errorHandler');
set_exception_handler('\Core\Error::exceptionHandler');
/*
 * Boot And Connect To Database
 */
\Core\Database::boot();
/*
 * Add Uri To Routing System
 */
$route = new Core\Router();


$route->add('/register/Api/demo/{id}','SuccessController@demo');

$route->add('/register/store/step3/{id}','RegisterController@register3');

$route->add('/register/step3/{id}','RegisterController@view3');


$route->add('/register/store/step1','RegisterController@register1');
$route->add('/register/store/step2','RegisterController@register2');


$route->add('/register/step2','RegisterController@view2');
$route->add('/register','RegisterController@view');

$route->add('/success','SuccessController@index');



/*
 * Dispatch Current Address
 */
$route->dispatch($_SERVER['REQUEST_URI']);



