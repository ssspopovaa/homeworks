<?php

class MessageSimpleFactory implements MessageFactoryInterface
{
    public function build(string $type): MessengerInterface
    {
        switch ($type) {
            case 'email':
                return new EmailMessenger();
            case 'sms':
                return new SmsMessenger();
            default:
                throw new Exception('Messenger not found for type: ' . $type);
        }
    }
}
