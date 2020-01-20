<?php


namespace src\models;
use config\Connection;

class ActiveRecord
{
    public static function row()
    {
        return Connection::connect()->query("SELECT * FROM this->tableName")->fetchAll();
    }
}