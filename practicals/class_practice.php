<?php
class Car{
    public $color;
    public $engine;
    function __construct($color,$engine){
        $this->color=$color;
        $this->engine=$engine;
    }
    function display(){
    echo"Color of the car is: $this->color \n";
    echo "Engine Specs of the car is: $this->engine \n";
    }
}
$Toyota=new Car("Red","5000cc");
$Toyota->display();
?>
