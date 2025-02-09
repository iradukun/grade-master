<?php
// GradeMaster/app/models/UserModel.php

class UserModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function login($username, $password, $userType) {
        $karine_conn = $this->db->connect();
        $table = 'yourname_tbl' . $userType . 's';
        
        $stmt = $karine_conn->prepare("SELECT * FROM $table WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        } else {
            return false;
        }
    }
}