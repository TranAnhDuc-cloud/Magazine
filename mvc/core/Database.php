<?php
class Database{
    public $conn = null;
    public $result = null;
    protected $host = "localhost";
    protected $user = "root";
    protected $pass = "";
    protected $database ="php04";
    public $author = "Tran Anh Duc";
    public $version = "1.0.0";

    function __construct(){
        $this->conn = mysqli_connect($this->host,$this->user,$this->pass);
        mysqli_select_db($this->conn,$this->database);
        mysqli_query($this->conn,"set names 'utf8'");
    }
    function GetData($sql){
        $this->result=mysqli_query($this->conn,$sql);
    }
    function fetchRow(){
        if (is_resource($this->result) ==false) return false;
            $row = mysqli_fetch_assoc($this->result);
        return $row;
    }
    
}