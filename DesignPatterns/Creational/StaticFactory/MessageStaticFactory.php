<?php

class MessageStaticFactory
{
    public static function build(string $type)
    {
        switch ($type) {
            case 'email':
                return new EmailMessenger();
            case 'sms':
                return new SmsMessenger();
            default:
                throw new Exception('Messenger not found');
        }
    }
}
