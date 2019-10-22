<?php

class Database{
    private $connection;
    private $host="localhost";
    private $username="root";
    private $password="";
    private $db_name="bazanovosti";

    function connect(){
        $this->connection = new mysqli($this->host,$this->username,$this->password,$this->db_name);

        if($this->connection->connect_errno != 0){
            echo "Greska u konekciji sa bazom!<br>";
        }else{
            echo "Konekcija napravljena!<br>";
        }

    }
}
