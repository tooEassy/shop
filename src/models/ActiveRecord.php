<?php


namespace src\models;

use core\Connection;

class ActiveRecord
{
    public $con;

    public function __construct()
    {
        $this->con = new Connection();
    }

    public function getAll()
    {
        $objects = array();
        foreach ($this->con->db->query("SELECT * FROM " . $this->getTableName())->fetchAll() as $item) {
            $row = new self();
            foreach ($item as $key => $value) {
                $row->$key = $value;
            }
            $objects[] = $row;
        }
        return $objects;
    }

    public function getById($allId)
    {
        $objects = array();
        foreach ($allId as $id) {
            foreach ($this->con->db->query("SELECT * FROM " . $this->getTableName() . " WHERE id = " . $id)->
                fetchAll() as $item) {
                $row = new self();
                foreach ($item as $key => $value) {
                    $row->$key = $value;
                }
                $objects[] = $row;
            }
        }
        return $objects;
    }
}