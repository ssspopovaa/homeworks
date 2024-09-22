<?php

abstract class AbstractVehicle implements VehicleInterface
{
    public VehicleInterface $vehicle;

    public function useVehicle()
    {
        $this->vehicle = $this->initVehicle();
        $this->vehicle->horn();
    }

    abstract function initVehicle(): VehicleInterface;
}
