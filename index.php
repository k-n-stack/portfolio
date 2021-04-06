<?php


if(!empty($_GET['page'])) {
    $page = strtolower($_GET['page']);
} else {
    $page = 'home';
}

if(is_file("Controller/${page}.controller.php")) {
    require_once("Controller/${page}.controller.php");
} else {
    echo "failover default route";
    echo "<br>";
    require_once("Controller/home.controller.php");
}