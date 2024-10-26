<?php

class Car implements VehicleInterface
{
    public function horn(): void
    {
        echo "Fa-fa" . PHP_EOL;
    }
}
