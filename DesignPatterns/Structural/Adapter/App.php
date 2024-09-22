<?php

require ('Interfaces/MediaFileInterface.php');
require ('Interfaces/MediaFileThirdPartyInterface.php');
require ('Classes/Heic.php');
require ('Classes/Jpeg.php');
require ('Classes/MediaFileAdapter.php');

class App
{
    public function uploadImage()
    {
        (new Jpeg())->upload();
        (new MediaFileAdapter())->upload();
    }
}

(new App())->uploadImage();