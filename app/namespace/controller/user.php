<?php



namespace app\namespace\controller;

class User {
    protected $prop1;
    protected $prop2;
    protected $prop3;

    public function __construct($prop1, $prop2, $prop3) {
        $this->prop1 = $prop1;
        $this->prop2 = $prop2;
        $this->prop3 = $prop3;
    }
    public function _print() {
        echo "$this->prop1, $this->prop2, $this->prop3";
    }
}