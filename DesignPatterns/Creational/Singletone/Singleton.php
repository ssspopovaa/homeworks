<?php

require ('SingletonTrait.php');

class Connection
{
    use SingletonTrait;
}

$connection = Connection::getInstance();

try {
    $connection1 = Connection::getInstance();
} catch (Exception $e) {
    echo $e->getMessage();
}
