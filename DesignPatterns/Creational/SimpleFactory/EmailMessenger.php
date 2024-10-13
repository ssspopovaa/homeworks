<?php

class EmailMessenger implements MessengerInterface
{
    public function sendMessage(): void
    {
        echo 'Email sent' . PHP_EOL;
    }
}
