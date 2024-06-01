<?php


class User {

    protected $name;
    protected $email;
    protected $phone;
    protected $country;

    public function __construct($name, $email, $phone, $country) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->country = $country;
    }

    public function get_name() { return $this->name; }
    public function get_email() { return $this->email; }
    public function get_phone() { return $this->phone; }
    public function get_country() { return $this->country; }

    public function set_name($name) { $this->name = $name; }
    public function set_email($email) { $this->email = $email; }
    public function set_phone($phone) { $this->phone = $phone; }
    public function set_country($country) { $this->country = $country; }

    public function _print_info() {
        echo '<pre>';
        echo $this->name . '<br>';
        echo $this->email . '<br>';
        echo $this->phone . '<br>';
        echo $this->country . '<br>';
        echo '</pre>';
    }

}