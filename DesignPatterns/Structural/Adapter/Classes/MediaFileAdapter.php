<?php

class MediaFileAdapter implements MediaFileInterface
{
    public MediaFileThirdPartyInterface $adapterObj;

    public function __construct()
    {
        $this->adapterObj = new Heic();
    }
    public function upload()
    {
        $this->adapterObj->addMedia();
    }
}
