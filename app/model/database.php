<?php


class Connect_database {
    /**
     * static properties for the class
     */
    protected static $_host = 'localhost';
    protected static $_database = 'php_dao';
    protected static $_user = 'root';
    protected static $_password = '';

    /**
     * this property used for [singleton design pattern]
     */
    protected static $_pdo;


    /**
     * connection to the database
     */
    public static function connect_database() {
        if (is_null(static::$_pdo)) {
            static::$_pdo = new PDO('mysql: host='.static::$_host.';dbname='.static::$_database, static::$_user, static::$_password);
        }
        return static::$_pdo;
    }



}