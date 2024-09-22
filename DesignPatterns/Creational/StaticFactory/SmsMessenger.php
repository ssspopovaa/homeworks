<?php

class SmsMessenger implements MessengerInterface
{
    public function sendMessage(): void
    {
        echo 'Sms sent' . PHP_EOL;
    }
}
