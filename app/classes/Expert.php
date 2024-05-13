<?php
class Expert{
    protected $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }
    public function fetch_all(){
        $sql = "SELECT expert_id, first_name, last_name, phone, email,short_description,price,image,business_area_id, active_user FROM expert";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function fetch_for_search(){
        $sql = "SELECT expert.expert_id, expert.first_name, expert.last_name, expert.short_description,expert.price, expert.image, business_area.name FROM expert 
        INNER join business_area on expert.business_area_id = business_area.business_id
        WHERE expert.active_user = 1";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function show_details($expert_id){
        $sql = "SELECT expert.expert_id, expert.first_name, expert.last_name, expert.short_description,expert.long_description,expert.price, expert.image, business_area.name FROM expert 
        INNER join business_area on expert.business_area_id = business_area.business_id
        WHERE expert.active_user = 1 AND expert.expert_id=?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i",$expert_id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
    public function search($business_id){
        $sql = "SELECT expert.expert_id, expert.first_name, expert.last_name, expert.short_description,expert.long_description,expert.price,expert.image, business_area.name 
        FROM expert 
        INNER join business_area on expert.business_area_id = business_area.business_id
        WHERE expert.active_user = 1 AND expert.business_area_id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i",$business_id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function count_all(){
        $sql = "SELECT COUNT(expert_id) as count FROM expert";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $row =  $result->fetch_assoc();
        return $row['count'];
    }
}