<?php

// load a test script file and exit immediately afterward.
// comment to disable test script.
// require_once "_test/test03.php";
// exit;

// echo $_SERVER['PATH_INFO'];

// echo $_SERVER['REQUEST_URI'];
require_once("model/Autoloader.class.php");
Autoloader::register();

LoadTime::start();

Route::add('/', 'home', 'GET');
Route::add('/test', 'test', 'GET');
Route::add('/test2', 'test2', 'GET');
Route::toController(Route::findPath());


// $routeCollection = array(
//     '/' => 'home',
//     '/test' => 'test',
//     '/test2' => 'test2',
// );

// echo $_SERVER['REQUEST_URI'];
// echo '<br>';
// echo 'hey';

// function pathExist($route_coll) {
//     foreach($route_coll as $path => $controller) {
//         if($path == $_SERVER['REQUEST_URI']) {
//             // echo "This path exist.";
//             return $controller;
//         }
//     }
//     echo "This is a wrong way.";
//     return "undefined_route";
// }


// $path = pathExist($routeCollection);
// require_once("controller/${path}.controller.php");
// require_once("controller/home.controller.php");


LoadTime::end();
echo LoadTime::delta();

// if(!empty($_GET['page'])) {
//     $page = strtolower($_GET['page']);
// } else {
//     $page = 'home';
// }

// if(is_file("Controller/${page}.controller.php")) {
//     require_once("Controller/${page}.controller.php");
// } else {
//     echo "failover default route";
//     echo "<br>";
//     require_once("Controller/home.controller.php");
// }