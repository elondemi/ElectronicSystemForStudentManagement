<?php 
 require_once(__DIR__ . '/../utils/db.php');
 require_once (__DIR__ . '/../query_builder/insert.php');
 require_once __DIR__ . "/../models/courses.php";
 require_once __DIR__ . "/../models/assigment.php";
require_once __DIR__. "/../query_handler/StudentRepository.php";
require_once __DIR__. "/../query_handler/StudentCourseRepository.php";
require_once __DIR__. "/../query_handler/AssessmentsRepository.php";



if(isset($_POST['dorezo_detyren'])){
    $lenda           = $_POST['lenda'];
    $semestri         = $_POST['semestri'];
    $detyra            = $_POST['detyra'];
    $linku            = $_POST['linku'];
    $conn = (new Database())->connect()->conn;  

    $studentRepository = new StudentRepository();
    $student = $studentRepository->selectStudent((int)$_SESSION['logged_user']);
    $course = $courseRepository->selectCourses($student);



  

    $course->setCourse_name($lenda);
    $course->setCourse_semester($semestri);
    $course->setAssignment_title($detyra);
    $course->setAssignment_link($linku);

        $studentRepository->updateStudent($student);
        Header("Location: /projekti_PI/pages/student/profili.php");
        exit();
  


}

?>