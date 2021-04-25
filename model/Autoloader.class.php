<?php

class Autoloader {
    public static function register() {
        spl_autoload_register(function($class) {
            require_once("model/${class}.class.php");
        });
    }
}