<?php

class Client implements ObserverInterface
{
    private string $name;

    public function handle($subject): void
    {
        echo 'Product: '
            . $subject->getName()
            . ' price was changed to: '
            . $subject->getPrice()
            . ' '
            . $this->name
            . ' notified!'
            . PHP_EOL;
    }

    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }
}
