<?php 
//  require_once(__DIR__ . '/../../utils/db.php');
//  require_once (__DIR__ . '/../../query_builder/insert.php');
//  require_once __DIR__ . "/../../../pages/professor/shto_lende.php";
 require_once __DIR__. "/../../query_handler/CoursesRepository.php";
 require_once __DIR__. "/../../query_handler/StudentRepository.php";
require_once __DIR__. "/../../models/courses.php";

 if(isset($_GET['course_id'])){

    $insertQueryBuilder = new CoursesRepository();
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $course = (new CoursesRepository())->getCourse($_GET["course_id"]);
    $student = (new StudentRepository())->selectStudent((int)$_SESSION['logged_user']);
    $insertQueryBuilder->linkToStudent($course, $student);
    Header("Location: /projekti_PI/pages/student/lendet.php");
    exit();
}

?>