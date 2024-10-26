<?php

require 'VehicleInterface.php';
require 'AbstractVehicleFactory.php';
require 'MotorcycleFactory.php';
require 'CarFactory.php';
require 'Car.php';
require 'Motorcycle.php';

class App
{
    public function useVehicle()
    {
        $motorcycleFactory = new MotorcycleFactory();
        $motorcycleFactory->useVehicle();

        $carFactory = new CarFactory();
        $carFactory->useVehicle();
    }
}

$app = new App();
$app->useVehicle();
