<?php

/**
 * Not consistent with the single responsibility principle
 */
class OrderNotConsistent
{
    public function process()
    {
        // logic
    }

    public function sendMessage()
    {
        // send message
    }

    public function LogOrder()
    {
        // logging order
    }

    public function deliver()
    {
        // logic with delivery
    }
}

/** ------------------------------------------------------------------------------------- */

/**
 * Consistent with the single responsibility principle
 */
class OrderConsistent
{
    public function process()
    {
        // logic
    }
}

class Log
{
    // logging entities
}

class Sendler
{
    // send messages
}

class Delivery
{
    // delivery logic
}
