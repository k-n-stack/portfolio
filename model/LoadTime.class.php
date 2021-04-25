<?php

class LoadTime {
    private static $start_time = 0;
    private static $end_time = 0;

    public static function start() {
        self::$start_time = microtime(true);
    }

    public static function end() {
        self::$end_time = microtime(true);
    }

    public static function delta() {
        return self::$end_time - self::$start_time;
    }
}