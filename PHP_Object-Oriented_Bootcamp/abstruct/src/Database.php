<?php

abstract class Database{

    protected $_handler;
    protected $statment;
    protected $host, $db_name, $db_user, $db_password;

    public function __construct($host, $db_name, $db_user, $db_password){

        $this->host = $host;
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_password = $db_password;
    }

    abstract function connect();

    abstract function get();

    public function select($sql){
        $this->statment =  $this->_handler->query($sql);
        return $this;
    }

    public function getConnection(){
        return $this->_handler;
    }


}
