<?php

class BossStrategy extends AbstractStrategy
{
    public function calculate(): int
    {
        return rand(1000, 5000);
    }
}
