<?php

require ('MessengerInterface.php');
require ('MessageStaticFactory.php');
require ('EmailMessenger.php');
require ('SmsMessenger.php');

class App
{
    public function sendMessage()
    {
        MessageStaticFactory::build('email')->sendMessage();
        MessageStaticFactory::build('sms')->sendMessage();
    }
}

try {
    (new App())->sendMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}

