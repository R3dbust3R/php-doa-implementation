<?php

require_once 'autoloader.php'; Autoloader::init();



class Employee extends User {
    private $salary;
    private $post;

    public function __construct($name, $email, $phone, $country, $salary, $post) {
        parent::__construct($name, $email, $phone, $country);
        $this->salary = $salary;
        $this->post = $post;
    }

    public function _print_employee() {
        echo '<pre>';
        echo 'Name: ' . $this->name . '<br>';
        echo 'Email: ' . $this->email . '<br>';
        echo 'Phone: ' . $this->phone . '<br>';
        echo 'Country: ' . $this->country . '<br>';
        echo 'Salary: ' . $this->salary . '<br>';
        echo 'Post: ' . $this->post. '<br>';
        echo '</pre>';
    }
}


$emp1 = new Employee('otmane', 'otmane@m-email.xr', '+ 1 (829) 390-0190', 'Morocco', 8900, 'FullStack Dev');
$emp1->_print_employee();

echo '<pre>';
class_a::_do_something();
class_b::_do_something();
class_c::_do_something();
echo '</pre>';
