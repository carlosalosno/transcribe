<?php
/**
 * Created by PhpStorm.
 * User: carlos.alonso
 * Date: 04/06/2016
 * Time: 13:09
 */

class Database{

    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "transcribe";
    private $username = "root";
    private $password = "tebasmysql";
    public $conn;

    // get the database connection
    public function getConnection(){ $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=". $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
