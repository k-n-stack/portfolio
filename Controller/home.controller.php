<?php

// echo "home controller";

if(empty($_SESSION['user'])) {
    include_once("view/home.php");
} elseif($_SESSION['user']->login() === true) {
    include_once("view/homeLogin.php");
} else {
    include_once("view/loginFail.php");
}