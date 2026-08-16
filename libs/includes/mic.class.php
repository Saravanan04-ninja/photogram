<?php

class Mic{
    private $brand;
    public $color;
    public $usb_port;
    public $model;
    private $light;
    public $price;

    public function __construct($brand){
        printf("constructing object...");
        $this->brand = ucwords($brand);
    }

    public function setlight($light){ //not affect ($this ->light)
         $this -> light = $light;
        }

    public function getBrand(){
        return $this->brand;
    }

    private function getModel(){
        return $this->model;
    }

    public function setModel($model){
        $this->model = ucwords($model);
    }

    public function getModelproxy(){
        return $this->getmodel();
    }

        public function __destruct(){
        printf("destruct object...");
        
    }
}