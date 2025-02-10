<?php
// GradeMaster/app/controllers/LoginController.php

class LoginController extends Controller {
    private $userModel;

    public function __construct() {
        $this->userModel = $this->model('UserModel');
    }

   public function index() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $userType = $_POST['user_type'];

            $user = $this->userModel->login($username, $password, $userType);

            if ($user) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_type'] = $userType;
                
                // Get user modules
                $userModules = $this->userModel->getUserModules($user['id'], $userType);
                $_SESSION['user_modules'] = $userModules;

                header('Location: ' . URLROOT . '/' . $userType . 'Dashboard');
            } else {
                $data['error'] = 'Invalid username or password';
                $this->view('login/index', $data);
            }
        } else {
            $this->view('login/index');
        }
    }
}