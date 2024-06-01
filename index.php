<?php


use app\autoloading\Autoloader;


require ('app/autoloading/autoloader.php'); Autoloader::init();

use app\controller\User_controller;

$otmane = new User_controller('otmane', 'otmane@cd.cc', '918-1238', 'Ma', 'HC2KD4I');