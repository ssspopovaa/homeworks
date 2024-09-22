<?php

require ('AbstractFactories/GuiKitFactory.php');
require ('Interfaces/GuiFactoryInterface.php');
require ('AbstractFactories/Factories/BootstrapFactory.php');
require ('AbstractFactories/Factories/MaterializeFactory.php');

class Page
{
    private GuiFactoryInterface $guiKit;

    public function __construct($type)
    {
        $this->guiKit = (new GuiKitFactory())->getFactory($type);
    }

    public function render()
    {
        $this->guiKit->drawButton();
        $this->guiKit->drawCheckBox();
        $this->guiKit->renderPage();
    }
}

try {
    $page = new Page('materialize');
    $page->render();
} catch (Exception $e) {
    echo $e->getMessage();
}
