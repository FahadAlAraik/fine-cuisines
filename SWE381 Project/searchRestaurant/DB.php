<?php 

class DB {
    private $con;
    private $host = "localhost";
    private $dbname = "mydb";
    private $user = "root";
    private $password = "";

    public function __construct(){
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
        try{                  //for connection
            $this->con = new PDO($dsn, $this->user, $this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
        } catch(PDOEXCEPTION $a){
            echo "Connection failed: " . $a->getmessage();
        }
    }

    public function viewData(){
        $query = "SELECT restaurant,rating FROM search";
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function searchData($restaurant) {
        $query = "SELECT * FROM search WHERE CONCAT(restaurant,specialty,location,rating) LIKE :restaurant";
        $stmt = $this->con->prepare($query);
        $stmt->execute(["restaurant" => "%". $restaurant . "%"]);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}