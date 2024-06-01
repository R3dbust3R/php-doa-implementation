<?php


namespace app\autoloading;

class Autoloader {
    public static function init() {
        spl_autoload_register(static function ($class) {
            // echo 'Namespace Path: ' . str_replace('\\', '/', $class) . '<br>';
            if (file_exists($class . '.php')) {
                require $class . '.php';
            }
        });
    } 


}
