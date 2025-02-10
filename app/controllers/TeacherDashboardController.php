<?php
// GradeMaster/app/controllers/TeacherDashboardController.php

class TeacherDashboardController extends Controller {
    private $marksModel;

    public function __construct() {
        $this->marksModel = $this->model('MarksModel');
    }

    public function index() {
        $teacherId = $_SESSION['user_id'];
        $students = $this->marksModel->getStudentsForTeacher($teacherId);
        
        $data = [
            'students' => $students
        ];

        $this->view('teacher/dashboard', $data);
    }

    public function enterMarks($studentId) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $marks = $_POST['marks'];
            $subject = $_POST['subject'];
            $teacherId = $_SESSION['user_id'];

            if ($this->marksModel->enterMarks($studentId, $subject, $marks, $teacherId)) {
                header('Location: ' . URLROOT . '/teacherDashboard');
            } else {
                $data['error'] = 'Failed to enter marks';
                $this->view('teacher/enterMarks', $data);
            }
        } else {
            $student = $this->marksModel->getStudentById($studentId);
            $data = [
                'student' => $student
            ];
            $this->view('teacher/enterMarks', $data);
        }
    }
}
?>