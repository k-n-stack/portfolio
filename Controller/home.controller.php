<?php

// echo "home controller";

if(empty($_SESSION['user'])) {
    include_once("View/home.php");
} elseif($_SESSION['user']->login() === true) {
    include_once("View/homeLogin.php");
} else {
    include_once("View/loginFail.php");
}