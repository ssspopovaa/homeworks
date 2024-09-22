<?php

require 'VehicleInterface.php';
require 'AbstractVehicle.php';
require 'Car.php';
require 'Motorcycle.php';

class App
{
    public function useVehicle()
    {
        (new Car())->horn();
        (new Motorcycle())->horn();
    }
}

$app = new App();
$app->useVehicle();