<?php

class SalaryManager
{
    private array $users = [
        'boss',
        'logist'
    ];

    public function calculateSalary(): int
    {
        $totalSalary = 0;
        foreach ($this->users as $user) {
            $totalSalary += $this->getStrategyByUser($user)->calculate();
        }

        return $totalSalary;
    }

    public function getStrategyByUser($user): AbstractStrategy
    {
        $strategyClass = ucfirst($user) . 'Strategy';
        
        if (class_exists($strategyClass)) {
            return new $strategyClass;
        }

        throw new Exception('Strategy for ' . $user . 'not found');
    }
}
