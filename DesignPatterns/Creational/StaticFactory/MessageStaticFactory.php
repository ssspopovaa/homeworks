<?php

class MessageStaticFactory
{
    public static function build(string $type)
    {
        return match ($type) {
            'email' => new EmailMessenger(),
            'sms' => new SmsMessenger(),
            'default' => throw new Exception('Messenger not found'),
        };
    }
}
