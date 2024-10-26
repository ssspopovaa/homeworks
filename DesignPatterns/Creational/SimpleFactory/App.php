<?php

require ('MessengerInterface.php');
require('MessageSimpleFactory.php');
require ('EmailMessenger.php');
require ('SmsMessenger.php');

class App
{
    public function sendMessage($type): void
    {
        (new MessageSimpleFactory())->build($type)->sendMessage();
    }
}

try {
    (new App())->sendMessage('sms');
} catch (Exception $e) {
    echo $e->getMessage();
}

