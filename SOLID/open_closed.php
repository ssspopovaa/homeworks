<?php

/**
 * Not consistent with the open-closed principle
 */

class TaxiNotConsistent
{
    private float $distance;
    private string $fuelType;
    public string $carFromPark;

    const TYPE_CAR_ELECTRIC = 'electric';
    const TYPE_CAR_PETROL = 'petrol';
    const TYPE_CAR_DIESEL = 'diesel';

    public function __construct($distance)
    {
        $this->distance = $distance;
    }

    public function getInfo()
    {
        $this->setCarByDistance();

        return [
            'car' => $this->carFromPark,
            'fuelType' => $this->fuelType,
        ];
    }

    private function setCarByDistance()
    {
        if ($this->distance < 10) {
            $this->fuelType = self::TYPE_CAR_ELECTRIC;
        } else if ($this->distance < 30) {
            $this->fuelType = self::TYPE_CAR_PETROL;
        } else {
            $this->fuelType = self::TYPE_CAR_DIESEL;
        }

        $this->setCarByFuelType();

        return $this;
    }

    /** when we need to add new fuelType car we will change this method*/
    private function setCarByFuelType(): void
    {
        if ($this->fuelType == self::TYPE_CAR_DIESEL) {
            $this->carFromPark = 'Toyota';
        } else if ($this->fuelType == self::TYPE_CAR_PETROL) {
            $this->carFromPark = 'Jeep';
        } else {
            $this->carFromPark = 'Nissan';
        }
    }
}

$taxiCarInfo = (new TaxiNotConsistent(10))->getInfo();

/** ------------------------------------------------------------------------------------- */

/**
 * Consistent with the open-closed principle
 */

interface CarInterface
{
    public function getFuelType(): string;
    public function getCarName(): string;
}

abstract class Car implements CarInterface
{
    protected string $fuelType;
    protected string $carName;

    public function getFuelType(): string
    {
        return $this->fuelType;
    }

    public function getCarName(): string
    {
        return $this->carName;
    }
}

class ElectricCar extends Car
{
    public function __construct()
    {
        $this->fuelType = 'electric';
        $this->carName = 'Toyota';
    }
}

class PetrolCar extends Car
{
    public function __construct()
    {
        $this->fuelType = 'petrol';
        $this->carName = 'Jeep';
    }
}

class DieselCar extends Car
{
    public function __construct()
    {
        $this->fuelType = 'diesel';
        $this->carName = 'Toyota';
    }
}

class CarSelector
{
    public function selectCarByDistance($distance): Car
    {
        switch ($distance) {
            case ($distance < 10):
                return new ElectricCar();
            case ($distance < 40):
                return new PetrolCar();
            default:
                return new DieselCar();
        }
    }
}

class TaxiConsistent
{
    private float $distance;
    public CarInterface $carFromPark;

    public function __construct($distance)
    {
        $this->distance = $distance;
        $this->carFromPark = (new CarSelector())->selectCarByDistance($this->distance);
    }

    public function getInfo(): array
    {
        return [
            'car' => $this->carFromPark->getCarName(),
            'fuelType' => $this->carFromPark->getFuelType(),
        ];
    }
}

$taxiCarInfo = (new TaxiConsistent(10))->getInfo();
