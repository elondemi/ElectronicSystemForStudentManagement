<?php 
 require_once(__DIR__ . '/../../utils/db.php');
 require_once (__DIR__ . '/../../query_builder/insert.php');
 require_once __DIR__ . "/../../../pages/professor/modifiko_lenden.php";
require_once __DIR__. "/../../query_handler/CoursesRepository.php";

 if(isset($_POST['modifiko_lenden'])){
    $course_id = $_GET['course_id'];
    $coursesRepository = (new CoursesRepository());
    $course = $coursesRepository->getCourse($course_id);
    $course->setCourse_description($_POST['course_description']);
    $coursesRepository->updateCourse($course);
    Header("Location: /projekti_PI/pages/professor/lendet.php");
    exit();
}

?>