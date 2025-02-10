<?php
// GradeMaster/app/models/UserModel.php
require_once APPROOT . '/core/Database.php';
class UserModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function login($username, $password, $userType) {
        $karine_conn = $this->db->connect();
        $table = $userType . 's';
        
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
    public function getUserModules($userId, $userType) {
        $karine_conn = $this->db->connect();
        $stmt = $karine_conn->prepare("SELECT m.* FROM modules m JOIN user_modules um ON m.id = um.module_id WHERE um.user_id = :user_id AND um.user_type = :user_type");
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':user_type', $userType);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}