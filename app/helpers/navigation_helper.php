<?php
// GradeMaster/app/helpers/navigation_helper.php

function generateNavigation($userType, $userModules) {
    $navigation = [
        'admin' => [
            'Dashboard' => '/adminDashboard',
            'Manage Modules' => '/adminDashboard/modules',
            'Register User' => '/adminDashboard/registerUser',
        ],
        'teacher' => [
            'Dashboard' => '/teacherDashboard',
        ],
        'student' => [
            'Dashboard' => '/studentDashboard',
        ],
    ];

    $html = '<nav><ul>';
    foreach ($navigation[$userType] as $label => $url) {
        $html .= '<li><a href="' . URLROOT . $url . '">' . $label . '</a></li>';
    }
    foreach ($userModules as $module) {
        $html .= '<li><a href="' . URLROOT . '/' . $userType . 'Dashboard/' . strtolower($module['module_name']) . '">' . $module['module_name'] . '</a></li>';
    }
    $html .= '<li><a href="' . URLROOT . '/login/logout">Logout</a></li>';
    $html .= '</ul></nav>';

    return $html;
}