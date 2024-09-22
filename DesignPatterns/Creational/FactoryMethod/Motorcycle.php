<?php

class Motorcycle extends AbstractVehicle
{
    public function initVehicle(): VehicleInterface
    {
        return new self();
    }

    public function horn(): void
    {
        echo "Bip-bip" . PHP_EOL;
    }
}
