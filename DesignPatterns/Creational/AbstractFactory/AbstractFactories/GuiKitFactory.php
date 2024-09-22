<?php

use Factories\BootstrapFactory;
use Factories\MaterializeFactory;


/**
 * Abstract Factory (Toolkit - Another name of pattern)
 */

class GuiKitFactory
{
    public function getFactory($type): GuiFactoryInterface
    {
        switch ($type) {
            case 'bootstrap':
                $factory = new BootstrapFactory();
                break;
            case 'materialize':
                $factory = new MaterializeFactory();
                break;
            default:
                throw new Exception('Such Gui factory  as ' . $type . ' not found' . PHP_EOL);
        }

        return $factory;
    }
}
