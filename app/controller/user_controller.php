<?php



namespace app\controller;

use app\autoloading\Autoloader, app\model\User;

require 'app/autoloading/autoloader.php'; Autoloader::init();

class User_controller extends User {
    /**
     * constuction method
     */
    public function __construct($name, $email, $phone, $country, $password) {
        parent::__construct($name, $email, $phone, $country, $password);
    }
}


