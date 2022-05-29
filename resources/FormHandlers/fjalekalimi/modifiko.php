<?php 
 require_once(__DIR__ . '/../../utils/db.php');
 require_once (__DIR__ . '/../../query_builder/insert.php');
 require_once __DIR__ . "/../../../pages/student/modifiko_profilin.php";
require_once __DIR__. "/../../query_handler/StudentRepository.php";


if(isset($_POST['modifiko_profilin'])){
    $student_id = $_GET['student_id'];
    $studentRepository = (new StudentRepository());
    $student = $studentRepository->selectStudent($student_id);
    $student->setStudent_name($_POST['student_name']);
    $studentRepository->updateStudent($student);
    Header("Location: /projekti_PI/pages/student/profili.php");
    exit();
}
?>