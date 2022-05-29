<?php 
 require_once(__DIR__ . '/../../utils/db.php');
 require_once (__DIR__ . '/../../query_builder/insert.php');
 require_once __DIR__ . "/../../../pages/professor/shto_lende.php";
 require_once __DIR__. "/../../query_handler/CoursesRepository.php";
 require_once __DIR__. "/../../query_handler/ProfessorRepository.php";
require_once __DIR__. "/../../models/courses.php";

 if(isset($_POST['shto_lenden'])){
    $emri               = $_POST['emri_lendes'];
    $pershkrimi            = $_POST['pershkrimi_lendes'];
    $ects               = $_POST['ects'];
    $semestri           = $_POST['semestri'];
    $insertQueryBuilder = new CoursesRepository();
    $course = new courses(null, $emri, $pershkrimi, $ects, $semestri);
    $course = $insertQueryBuilder->addCourse($course);
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $professor = (new ProfessorRepository())->selectProfessor((int)$_SESSION['logged_user']);
    $insertQueryBuilder->linkToProfessor($course, $professor);
    Header("Location: /projekti_PI/pages/professor/lendet.php");
    exit();
}

?>