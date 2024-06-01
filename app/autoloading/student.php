<?php

require_once 'autoloader.php'; Autoloader::init();



class Student extends User {
    private $note;
    private $level;

    public function __construct($name, $email, $phone, $country, $note, $level) {
        parent::__construct($name, $email, $phone, $country);
        $this->note = $note;
        $this->level = $level;
    }

    public function _print_student() {
        echo '<pre>';
        echo 'Name: ' . $this->name . '<br>';
        echo 'Email: ' . $this->email . '<br>';
        echo 'Phone: ' . $this->phone . '<br>';
        echo 'Country: ' . $this->country . '<br>';
        echo 'Note: ' . $this->note . '<br>';
        echo 'Level: ' . $this->level. '<br>';
        echo '</pre>';
    }
}


$student1 = new Student('otmane', 'otmane@m-email.xr', '+ 1 (829) 390-0190', 'Morocco', 18, 'BAC+7');
$student1->_print_student();

echo '<pre>';
class_a::_do_something();
class_b::_do_something();
class_c::_do_something();
echo '</pre>';