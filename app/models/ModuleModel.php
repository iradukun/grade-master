<?php
// GradeMaster/app/models/ModuleModel.php
require_once APPROOT . '/core/Database.php';
class ModuleModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllModules() {
        $karine_conn = $this->db->connect();
        $stmt = $karine_conn->query("SELECT * FROM modules");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addModule($moduleName, $description) {
        $karine_conn = $this->db->connect();
        $stmt = $karine_conn->prepare("INSERT INTO modules (module_name, description) VALUES (:module_name, :description)");
        $stmt->bindParam(':module_name', $moduleName);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    public function updateModule($id, $moduleName, $description) {
        $karine_conn = $this->db->connect();
        $stmt = $karine_conn->prepare("UPDATE modules SET module_name = :module_name, description = :description WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':module_name', $moduleName);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    public function deleteModule($id) {
        $karine_conn = $this->db->connect();
        $stmt = $karine_conn->prepare("DELETE FROM modules WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}