<?php

require ('MessengerInterface.php');
require ('MessageStaticFactory.php');
require ('EmailMessenger.php');
require ('SmsMessenger.php');

class App
{
    /**
     * @param string $type
     * @return void
     * @throws Exception
     */
    public function sendMessage(string $type)
    {
        MessageStaticFactory::build($type)->sendMessage();
    }
}

try {
    (new App())->sendMessage('email');
} catch (Exception $e) {
    echo $e->getMessage();
}

