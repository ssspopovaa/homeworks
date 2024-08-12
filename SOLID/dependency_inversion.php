<?php

/**
 * Not consistent with the dependency inversion principle
 */

class Order
{
    private MySqlDb $dbConnection;

    public function __construct()
    {
        $this->dbConnection = new MySqlDb();
    }

    public function getAllOrders(): array
    {
        return $this->dbConnection->connect()->getAllOrders();
    }
}

class MySqlDb
{
    public function connect()
    {
        return $this;
    }

    public function getAllOrders(): array
    {
        return [];
    }
}

class MongoDb
{
    public function connect()
    {
        // to implement this DB connection need to change Order Class (Order depend on MySql class)
        // @todo implement connection
        return $this;
    }

    public function getAllOrders(): array
    {
        return [];
    }
}

$order = (new Order())->getAllOrders();

/** ------------------------------------------------------------------------------------- */

/**
 * Consistent with the dependency inversion principle
 */
interface Database
{
    public function connect();

    public function getAllOrders();
}

class MySqlDb2 implements Database
{
    public function connect()
    {
        return $this;
    }

    public function getAllOrders(): array
    {
        return [];
    }
}

class MongoDb2 implements Database
{
    public function connect()
    {
        return $this;
    }

    public function getAllOrders(): array
    {
        return [];
    }
}

class Order2
{
    private Database $dbConnection;

    public function __construct(Database $dbConnection)
    {
        $this->dbConnection = $dbConnection->connect();
    }

    public function getAllOrders(): array
    {
        return $this->dbConnection->getAllOrders();
    }
}

$mySqlOrders = (new Order2(new MySqlDb2()))->getAllOrders();
$mongoOrders = (new Order2(new MongoDb2()))->getAllOrders();
