<?php

interface MessageFactoryInterface
{
    public function build(string $type): MessengerInterface;
}
