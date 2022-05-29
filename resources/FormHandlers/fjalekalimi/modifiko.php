<?php 
 require_once(__DIR__ . '/../../utils/db.php');
 require_once (__DIR__ . '/../../query_builder/insert.php');
 require_once __DIR__ . "/../../../pages/student/modifiko_profilin.php";
require_once __DIR__. "/../../query_handler/StudentRepository.php";

$error ="";
if(isset($_POST['modifiko_profilin'])){
    $password_old           = $_POST['fjalekalimi_vjeter'];
    $password_new           = $_POST['fjalekalimi_ri'];
    $conn = (new Database())->connect()->conn;
    $pass_hashed = crypt($password_new, PASSWORD_BCRYPT);
  
    $studentRepository = new StudentRepository();
  
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $student = $studentRepository->selectStudent((int)$_SESSION['logged_user']);
    $check_password = $student->getStudent_password();
    if (password_verify( $password_old, $check_password)) {

        $student->setStudent_password($pass_hashed);
        $studentRepository->updateStudent($student);
        Header("Location: /projekti_PI/pages/student/profili.php");
        exit();
    }
    else {
        $error = 'Old password doesnt match';
    }

}

?>