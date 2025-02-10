<?php
// GradeMaster/app/models/ModuleModel.php

class ModuleModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllModules() {
        $karine_conn = $this->db->connect();
        $stmt = $karine_conn->query("SELECT * FROM yourname_tblmodules");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addModule($moduleName, $description) {
        $karine_conn = $this->db->connect();
        $stmt = $karine_conn->prepare("INSERT INTO yourname_tblmodules (module_name, description) VALUES (:module_name, :description)");
        $stmt->bindParam(':module_name', $moduleName);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    public function updateModule($id, $moduleName, $description) {
        $karine_conn = $this->db->connect();
        $stmt = $karine_conn->prepare("UPDATE yourname_tblmodules SET module_name = :module_name, description = :description WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':module_name', $moduleName);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    public function deleteModule($id) {
        $karine_conn = $this->db->connect();
        $stmt = $karine_conn->prepare("DELETE FROM yourname_tblmodules WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}