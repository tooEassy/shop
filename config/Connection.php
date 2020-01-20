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
//       $res = $db->query("SELECT * FROM products WHERE id = 1")->fetchAll();
//        foreach ($res as $result){
//            if (gettype($result) == 'array')
//            {
//                print_r($result);
//                foreach ($result as $item) {
//                    print_r ($item);
//                }
//            }
//        }
//        return $res[1][1];
} 