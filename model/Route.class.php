<?php

class Route {
    private static $routeCollection = [];

    public static function add($path, $controller, $method = 'GET') {
        array_push(self::$routeCollection, [
            'path' => $path,
            'controller' => $controller,
            'method' => $method
        ]);
    }

    public static function findPath() {
        foreach(self::$routeCollection as $route) {
            if($route['path'] == $_SERVER['REQUEST_URI']) {
                return $route;
            }
        }
        return [
            'path' => '/undefined_route',
            'controller' => 'undefined_route',
            'method' => 'GET'
        ];
    }

    public static function toController($route) {
        $controller = $route['controller'];
        require_once("controller/${controller}.controller.php");
    }
}