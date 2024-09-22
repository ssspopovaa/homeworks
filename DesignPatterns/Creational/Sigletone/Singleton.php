<?php

require ('SingletonTrait.php');

class Connection
{
    use SingletonTrait;
}

$connection = Connection::getInstance();

echo '<pre>';
var_dump($connection);
die();
