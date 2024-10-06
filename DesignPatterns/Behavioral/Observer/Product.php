<?php

class Product implements ObserverableInterface
{
    protected int $price;
    protected string $name;
    public array $observers;

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function changePrice(int $price)
    {
        $this->price = $price;
        $this->notify();
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function attach(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(ObserverInterface $observer)
    {
        $idxObserver = array_search($observer, $this->observers);
        if ($idxObserver !== false) {
            unset($this->observers[$idxObserver]);
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle($this);
        }
    }
}
