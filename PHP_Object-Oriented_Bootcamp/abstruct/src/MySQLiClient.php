<?php

class MySQLiClient extends Database
{
    public function __construct($host, $db_name, $db_user, $db_password)
    {
        parent::__construct($host, $db_name, $db_user, $db_password);
    }

    public function connect(){
        try {
            $this->_handler = new mysqli($this->host, $this->db_user, $this->db_password, $this->db_name,);
           
        } catch (mysqli_sql_exception $e) {
            throw $e;
        }
        
        return $this;
    }

    public function get(){
        $results = json_encode($this->statment->fetch_all(MYSQLI_ASSOC));

        return json_decode($results);
    }

    

}
