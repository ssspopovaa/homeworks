<?php

require ('Interfaces/SalaryInterface.php');
require ('Strategies/AbstractStrategy.php');
require ('SalaryManager.php');
require ('Strategies/BossStrategy.php');
require ('Strategies/LogistStrategy.php');

class App
{
    public function getTotalSalary()
    {
        echo (new SalaryManager())->calculateSalary() . PHP_EOL;
    }
}

(new App)->getTotalSalary();
