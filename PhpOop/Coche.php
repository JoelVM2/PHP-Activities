<?php
class Car{

    private $brand;
    private $model;
    private $year;
    private $currentSpeed;

    function __construct($brand, $model, $year){
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    function getBrand(){
        return $this->brand;
    }

    function setBrand($n){
        $this->brand = $n;
    }

    function getModel(){
        return $this->model;
    }

    function setModel($n){
        $this->model = $n;
    }

    function getYear(){
        return $this->year;
    }   

    function setYear($n){
        $this->year = $n;
    }

    function getCurrentSpeed(){
        return $this->currentSpeed;
    }   

    function setCurrentSpeed($n){
        $this->currentSpeed = $n;
    }

    function accelerate($increase){
        $this->currentSpeed += $increase; 
    }

    function brake($decrease){
        if(($this->currentSpeed - $decrease) < 0){
            $this->currentSpeed = 0;
        }else{
            $this->currentSpeed -= $decrease;
        }
    }

    function carDetails(){
        echo "Brand: " . $this->brand ." Model: ". $this->model ." Year: " . $this->year ." Current speed: " . $this->currentSpeed;
    }
}
    $newCar = new Car("Renault","Clio","2023");
 
    $newCar->accelerate(100);
    $newCar->brake(20);
    $newCar->carDetails();

?>