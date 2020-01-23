<?php
namespace config;

 class Connection
{
    public $db;
    public function __construct()
    {
        try {
            $this->db = new \PDO('mysql:host=localhost;dbname=tooEasy_db;', 'root', 'mnbv');
        }
        catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
} 