<?php
require_once(__DIR__ . '/../utils/db.php');
require_once(__DIR__ . '/../query_builder/insert.php');
require_once __DIR__ . "/../../signup.php";
require_once __DIR__ . "/../query_handler/StudentRepository.php";
require_once __DIR__ . "/../query_handler/ProfessorRepository.php";

$error = "";
if (isset($_POST['signup'])) {
    $emri               = $_POST['Name'];
    $mbiemri            = $_POST['Surname'];
    $role               = $_POST['Role'];
    $password           = $_POST['Password'];
    $password_confirm   = $_POST['Conf_Password'];
    $email              = $_POST['Email'];
    $professor = "Professor";
    // password encrypted
    $pass_hashed = crypt($password, PASSWORD_BCRYPT);
    //  $pass_hashed = password_hash($password, PASSWORD_BCRYPT);

    if (empty($emri) || empty($mbiemri) || empty($role) || empty($password) || empty($email)) {
        $error = "Please fill all the required fields";
    } else {
        $pattern1 = '/^[A-Z].*/';
        if (!preg_match($pattern1, $emri) || !preg_match($pattern1, $mbiemri)) {
            $error = "Name should start with Capital letter";
        } else {
            $pattern = '/^[a-zA-Z0-9 _\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/';
            if (!preg_match($pattern, $email)) {
                $error = "Write a valid email";
            } else {
                if (strlen($password) <= 7) {
                    $error = "Password should be atleast 8 chars long";
                } else {
                    if ($password != $password_confirm) {
                        $error = "Passwords dosent match";
                    } else {
                        if ($role === 'student') {
                            $insertQueryBuilder = new StudentRepository();
                            // $student_id,$student_name,$student_surname,$student_password,$student_email
                            $student = new students(null, $emri, $mbiemri, $pass_hashed, $email);
                            $student = $insertQueryBuilder->createStudent($student); //to insert and rewrite new student id
                        } else if ($role === 'prof/ass') {
                            $insertQueryBuilder = new ProfessorRepository();
                            $professor = new professors(null, $emri, $mbiemri, $professor, $email, $pass_hashed);
                            $professor = $insertQueryBuilder->createProfessor($professor); //to insert and rewrite new student id
                        }
                        return header('Location: login.php');
                    }
                }
            }
        }
    }
}
