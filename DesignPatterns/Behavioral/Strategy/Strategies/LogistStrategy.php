<?php

class LogistStrategy extends AbstractStrategy
{
    public function calculate(): int
    {
        return rand(500, 1000);
    }
}
