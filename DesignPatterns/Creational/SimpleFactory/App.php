<?php

require ('MessengerInterface.php');
require('MessageSimpleFactory.php');
require ('EmailMessenger.php');
require ('SmsMessenger.php');

class App
{
    public function sendMessage()
    {
        (new MessageSimpleFactory())->build('email')->sendMessage();
        (new MessageSimpleFactory())->build('sms')->sendMessage();
    }
}

try {
    (new App())->sendMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}

