<?php

interface ObserverInterface
{
    public function handle(ObserverableInterface $subject): void;
}
