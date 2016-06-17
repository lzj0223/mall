<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->configure('sys');
use App\Services\Routes as RoutesManager;
$routesManager = new RoutesManager();
#
if (stripos($_SERVER['HTTP_HOST'],'admin')!==false){
    $routesManager->admin();
}else{
    $routesManager->www();
}





