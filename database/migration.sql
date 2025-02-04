CREATE DATABASE IF NOT EXISTS IradukundaMoustapa;
USE IradukundaMoustapa;

CREATE TABLE Iradukunda_tblstudents (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    student_id VARCHAR(20) UNIQUE NOT NULL,
    class VARCHAR(50) NOT NULL,
    other_details VARCHAR(255)
);

CREATE TABLE Iradukunda_tblteachers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    subject VARCHAR(50) NOT NULL,
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE Iradukunda_tblmarks (
    id INT PRIMARY KEY AUTO_INCREMENT,
    student_id VARCHAR(20) NOT NULL,
    subject VARCHAR(50) NOT NULL,
    marks DECIMAL(5,2) NOT NULL,
    entry_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    teacher_id INT NOT NULL,
    FOREIGN KEY (student_id) REFERENCES Iradukunda_tblstudents(student_id),
    FOREIGN KEY (teacher_id) REFERENCES Iradukunda_tblteachers(id)
);

CREATE TABLE Iradukunda_tbladmins (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE Iradukunda_tblmodules (
    id INT PRIMARY KEY AUTO_INCREMENT,
    module_name VARCHAR(255) UNIQUE NOT NULL,
    description TEXT,
    parent_module_id INT NULL,
    is_active BOOLEAN DEFAULT TRUE,
    other_details VARCHAR(255),
    FOREIGN KEY (parent_module_id) REFERENCES Iradukunda_tblmodules(id)
);

CREATE TABLE Iradukunda_tbluser_modules (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    module_id INT NOT NULL,
    user_type VARCHAR(20) NOT NULL,
    FOREIGN KEY (module_id) REFERENCES Iradukunda_tblmodules(id)
);
