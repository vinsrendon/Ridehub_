<?php 

class database
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "ridehub";

    public function initDatabase(){
        try {
            $con = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4", 
            $this->user,
            $this->pass);
            
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
        } catch (PDOException $th) {
            echo $th;
            return null;
        }
    }
}