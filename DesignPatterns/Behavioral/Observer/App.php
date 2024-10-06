<?php

require "ObserverInterface.php";
require "ObserverableInterface.php";
require "Product.php";
require "Client.php";

class App
{
    public function execute()
    {
        $client1 = (new Client())->setName('First Client Name');
        $client2 = (new Client())->setName('Second Client Name');
        $client3 = (new Client())->setName('Third Client Name');

        $product = (new Product())->setName('Product Name');
        $product->attach($client1);
        $product->attach($client2);
        $product->attach($client3);
        
        $product->changePrice(300);

    }
}

(new App())->execute();