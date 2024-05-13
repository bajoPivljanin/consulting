<?php
class User{
    protected $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }
    public function create($first_name,$last_name,$username,$phone_number,$email,$password){
        $hashed_password = password_hash($password,PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (first_name,last_name,username,phone_number,email,password) VALUES (?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssss",$first_name,$last_name,$username,$phone_number,$email,$hashed_password);
        $result = $stmt->execute();

        if($result){
            $_SESSION['user_id'] = $result->insert_id;
            return true;
        }
        else{
            return false;
        }
    }
    public function login($username,$password){
        $sql = "SELECT user_id,password FROM users WHERE username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s",$username);
        $stmt->execute();

        $results = $stmt->get_result();
          
        if($results->num_rows==1){
            $user = $results->fetch_assoc();
            if(password_verify($password,$user['password'])){
                $_SESSION['user_id'] = $user['user_id'];
                return true;
            }
        }

    }
    public function is_logged(){
        if(isset($_SESSION['user_id'])){
            return true;
        }
        return false;
    }
    public function logout(){
        unset($_SESSION['user_id']);
    }
}