<?php

class MotorcycleFactory extends AbstractVehicleFactory
{
    public function createVehicle(): VehicleInterface
    {
        return new Motorcycle();
    }
}
