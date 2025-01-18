<?php

namespace Config;

use mysqli;

class Database1{
    private $host = "127.0.0.1";
    private $db = "task-api1";
    private $user = "root";
    private $password = "";
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db);
        if($this->conn->connect_error){
            die(json_encode(
                [
                    "error" => "Connection failed"
                ]
            ));
        }
    }

    public function getConnection(){
        return $this->conn;
    }

}
