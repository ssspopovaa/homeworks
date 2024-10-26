<?php

require 'VehicleInterface.php';
require 'AbstractVehicleFactory.php';
require 'MotorcycleFactory.php';
require 'CarFactory.php';
require 'Car.php';
require 'Motorcycle.php';

class App
{
    private AbstractVehicleFactory $factory;

    public function __construct(AbstractVehicleFactory $factory)
    {
        $this->factory = $factory;
    }

    public function useVehicle()
    {
        $this->factory->useVehicle();
    }
}

$app = new App(new CarFactory);
$app->useVehicle();

$app = new App(new MotorcycleFactory());
$app->useVehicle();
