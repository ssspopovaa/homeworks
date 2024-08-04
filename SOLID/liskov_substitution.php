<?php

/**
 * Not consistent with the Liskov substitution principle
 */

class Animal
{
    public $paws;

    public function __construct($paws)
    {
        $this->paws = $paws;
    }

    public function run()
    {
        try {
            if ($this->paws < 1) {
                throw new Exception('Paws not found');
            }
            // process with paws
            echo "Runs very fast with " . $this->paws . " paws" . PHP_EOL;
        } catch (Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
    }
}

class Snake extends Animal
{
    public function crawl()
    {
        // crawling process
    }

    // method run is not implemented
}

(new Animal(40))->run();
(new Snake(0))->run();


/** ------------------------------------------------------------------------------------- */
echo '-----------------' . PHP_EOL;
/**
 * Consistent with the Liskov substitution principle
 */

abstract class AnimalConsistent
{
    abstract function action();

    // can add another methods or properties but common for both classes (AnimalWithPaws & AnimalWithoutPaws)
}

class AnimalWithPaws extends AnimalConsistent
{
    public int $paws;

    public function __construct($paws = 0)
    {
        $this->paws = $paws;
    }

    private function run(): void
    {
        try {
            if ($this->paws < 1) {
                throw new Exception('Paws not found');
            }
            // process with paws
            echo "Runs very fast with " . $this->paws . " paws" . PHP_EOL;
        } catch (Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
    }

    public function action(): void
    {
        $this->run();
    }
}

class AnimalWithoutPaws extends AnimalConsistent
{
    public function action(): void
    {
        $this->crawl();
    }

    public function crawl(): void
    {
        echo "Crawling very fast without paws " . PHP_EOL;
    }
}

class Dog extends AnimalWithPaws
{
}

class Viper extends AnimalWithoutPaws
{
}

(new Dog(4))->action();
(new Viper())->action();
