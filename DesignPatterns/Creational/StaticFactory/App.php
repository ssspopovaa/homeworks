<?php

require ('MessengerInterface.php');
require ('MessageStaticFactory.php');
require ('EmailMessenger.php');
require ('SmsMessenger.php');

class App
{
    public function sendMessage()
    {
        (new MessageStaticFactory())->build('email')->sendMessage();
        (new MessageStaticFactory())->build('sms')->sendMessage();
    }
}

(new App())->sendMessage();
