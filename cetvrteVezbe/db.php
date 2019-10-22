<?php

class Database{
    private $connection;
    private $host="localhost";
    private $username="root";
    private $password="";
    private $db_name="bazanovosti";
    private $result;
    private $returnet_rows;
    private $returned_rows_u;

    private function connect(){
        $this->connection = new mysqli($this->host,$this->username,$this->password,$this->db_name);

        if($this->connection->connect_errno != 0){
            echo "Greska u konekciji sa bazom!<br>";
        }else{
            echo "Konekcija napravljena!<br>";
        }

    }

    function getResult(){
        return $this->result;
    }

    function __construct($db_name)
    {
        $this->db_name = $db_name;
        $this->connect();
    }

    function select($table_name="novosti",$column="naslov,tekst",$condition=null,$sort=null){
        // upit 
        $upit = "SELECT $column FROM $table_name ";
        if($condition != null){
            $upit .= " WHERE $uslov ";
        }elseif($sort != null){
            $upit .= " ORDER BY $sort";
        }
        //izvrsi upit
        $this->executeQuery($upit);
    }

    function executeQuery($upit){
        if($this->result = $this->connection->query($upit)){
            $this->returnet_rows = $this->result->num_rows;
            $this->returned_rows_u = $this->connection->affected_rows;
            return true;
        }else{
            return false;
        }

    }

    function insert($podaci,$table_name="novosti",$column="naslov,tekst"){
        $upit = "INSERT INTO $table_name($column) VALUES('$podaci[0]','$podaci[1]')";
        return $this->executeQuery($upit);
    }

}
