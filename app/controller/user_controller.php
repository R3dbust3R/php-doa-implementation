<?php


require 'app/model/user_model.php';

class User_controller extends User {
    /**
     * constuction method
     */
    public function __construct($name, $email, $phone, $country, $password) {
        parent::__construct($name, $email, $phone, $country, $password);
    }
}