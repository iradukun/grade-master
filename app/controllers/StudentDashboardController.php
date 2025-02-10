<?php
// GradeMaster/app/controllers/StudentDashboardController.php

class StudentDashboardController extends Controller {
    private $marksModel;

    public function __construct() {
        $this->marksModel = $this->model('MarksModel');
    }

    public function index() {
        $studentId = $_SESSION['user_id'];
        $marks = $this->marksModel->getMarksForStudent($studentId);
        
        $data = [
            'marks' => $marks
        ];

        $this->view('student/dashboard', $data);
    }
}
?>