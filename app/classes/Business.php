<?php
class Business{
    protected $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }
    public function fetch_all(){
        $sql = "SELECT business_id, name, description FROM business_area ORDER BY name ASC";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
}