<?php
// GradeMaster/app/models/MarksModel.php

class MarksModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getStudentsForTeacher($teacherId) {
        $karine_conn = $this->db->connect();
        $stmt = $karine_conn->prepare("SELECT s.id, s.name, s.student_id FROM yourname_tblstudents s JOIN yourname_tblteachers t ON s.class = t.class WHERE t.id = :teacher_id");
        $stmt->bindParam(':teacher_id', $teacherId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function enterMarks($studentId, $subject, $marks, $teacherId) {
        $karine_conn = $this->db->connect();
        $stmt = $karine_conn->prepare("INSERT INTO yourname_tblmarks (student_id, subject, marks, teacher_id) VALUES (:student_id, :subject, :marks, :teacher_id)");
        $stmt->bindParam(':student_id', $studentId);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':marks', $marks);
        $stmt->bindParam(':teacher_id', $teacherId);
        return $stmt->execute();
    }

    public function getMarksForStudent($studentId) {
        $karine_conn = $this->db->connect();
        $stmt = $karine_conn->prepare("SELECT * FROM yourname_tblmarks WHERE student_id = :student_id");
        $stmt->bindParam(':student_id', $studentId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}