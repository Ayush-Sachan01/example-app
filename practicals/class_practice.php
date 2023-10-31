<?php
class Car{
    public $color; // Property to store the color of the car
    public $engine; // Property to store the engine specifications of the car
    function __construct($color,$engine){
        $this->color=$color; // Initialize the color property
        $this->engine=$engine; // Initialize the engine property
    }
    // Display the color and engine specifications of the car:
    function display(){
    echo"Color of the car is: $this->color \n";
    echo "Engine Specs of the car is: $this->engine \n";
    }
}
$Toyota=new Car("Red","5000cc"); // Create a new Car object with specified color and engine
$Toyota->display(); // Display the details of the car

