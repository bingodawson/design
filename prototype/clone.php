<?php

class Wheel{
    //轮胎半径
    private $radius = 10;

    public function setRadius($value){
        $this->radius = $value;
    }
}
class Door{

}

class Car{

    private $wheel;
    private $door;

    //车内温度
    private $temperature;

    public function __construct(Wheel $wheel, Door $door)
    {
        $this->wheel = $wheel;
        $this->door  = $door;
        echo "--- new a car construct ----<br>";
        $this->temperature = 30;
    }

    public function setTemperature($newValue){
        $this->temperature = $newValue;
    }

    public function __clone()
    {
        echo "--- enter clone function ---<br>";
        $this->wheel = clone $this->wheel;
        $this->door  = clone $this->door;
    }
}

$wheel = new Wheel();
$door  = new Door();
$car1 = new Car($wheel, $door);
$car2 = clone $car1;
$car2->setTemperature(25);
var_dump($car1);
var_dump($car2);
$wheel->setRadius(20);
var_dump($car2);
var_dump($car1);

