<?php

trait SingletonTrait
{
    private static ?self $instance = null;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    /**
     * @return Connection|null
     */
    public static function getInstance(): self
    {
        return self::$instance ??= new self();
    }
}
