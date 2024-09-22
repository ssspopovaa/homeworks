<?php

class Car extends AbstractVehicle
{
    public function initVehicle(): VehicleInterface
    {
        return new self();
    }

    public function horn(): void
    {
        echo "Fa-fa" . PHP_EOL;
    }
}
