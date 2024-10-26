<?php

require ('MessengerInterface.php');
require ('MessageFactoryInterface.php');
require('MessageSimpleFactory.php');
require ('EmailMessenger.php');
require ('SmsMessenger.php');

class App
{
    public function sendMessage($type)
    {
        $factory = new MessageSimpleFactory();
        $factory->build($type)->sendMessage();
    }
}

try {
    (new App())->sendMessage('sms');
} catch (Exception $e) {
    echo $e->getMessage();
}

