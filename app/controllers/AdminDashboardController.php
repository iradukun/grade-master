<?php
// GradeMaster/app/controllers/AdminDashboardController.php

class AdminDashboardController extends Controller {
    private $moduleModel;
    private $userModel;

    public function __construct() {
        $this->moduleModel = $this->model('ModuleModel');
        $this->userModel = $this->model('UserModel');
    }

    public function index() {
        $modules = $this->moduleModel->getAllModules();
        $students = $this->userModel->getAllUsers('student');
        $teachers = $this->userModel->getAllUsers('teacher');

        $data = [
            'modules' => $modules,
            'students' => $students,
            'teachers' => $teachers
        ];

        $this->view('admin/dashboard', $data);
    }

    public function addModule() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $moduleName = $_POST['module_name'];
            $description = $_POST['description'];

            if ($this->moduleModel->addModule($moduleName, $description)) {
                header('Location: ' . URLROOT . '/adminDashboard');
            } else {
                $data['error'] = 'Failed to add module';
                $this->view('admin/addModule', $data);
            }
        } else {
            $this->view('admin/addModule');
        }
    }

    public function registerUser() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $userType = $_POST['user_type'];
            $additionalInfo = $_POST['additional_info'];

            if ($this->userModel->registerUser($name, $username, $password, $userType, $additionalInfo)) {
                header('Location: ' . URLROOT . '/adminDashboard');
            } else {
                $data['error'] = 'Failed to register user';
                $this->view('admin/registerUser', $data);
            }
        } else {
            $this->view('admin/registerUser');
        }
    }
}