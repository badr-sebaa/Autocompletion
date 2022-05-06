<?php

class Db{

    private $con;
    private $host = "localhost";
    private $dbname = "manga";
    private $user = "root";
    private $password = "root";

    public function __construct()
    {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
        try{    
            $this->con = new PDO($dsn, $this->user, $this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo "connection failed: " . $e->getMessage();
        }
    }

    public function viewData(){
        $query = "SELECT * FROM mytable";
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function searchData($title){
        $query = "SELECT * FROM mytable WHERE title LIKE :title";
        $stmt = $this->con->prepare($query);
        $stmt->execute(["title" => "%".$title."%"]);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

}