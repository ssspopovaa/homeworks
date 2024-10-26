<?php

class CarFactory extends AbstractVehicleFactory
{
    public function createVehicle(): VehicleInterface
    {
        return new Car();
    }
}
