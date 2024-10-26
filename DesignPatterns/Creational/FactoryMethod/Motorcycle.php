<?php

class Motorcycle implements VehicleInterface
{
    public function horn(): void
    {
        echo "Bip-bip" . PHP_EOL;
    }
}
