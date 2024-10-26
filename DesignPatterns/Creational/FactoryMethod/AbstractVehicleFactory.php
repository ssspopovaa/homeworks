<?php

abstract class AbstractVehicleFactory
{
    abstract public function createVehicle(): VehicleInterface;

    public function useVehicle(): void
    {
        $vehicle = $this->createVehicle();
        $vehicle->horn();
    }
}
