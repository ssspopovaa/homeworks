<?php

trait SingletonTrait
{
    private static ?self $instance = null;

    private function __construct()
    {

    }

    private function __clone(): void
    {

    }

    public function __wakeup(): void
    {

    }

    /**
     * @return Connection|null
     */
    public static function getInstance(): ?Connection
    {
        return self::$instance ?? self::$instance = new self();
    }
}
