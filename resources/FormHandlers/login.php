<?php 
    error_reporting(E_ERROR | E_PARSE);
    require_once(__DIR__ . '/../utils/db.php');
    require_once (__DIR__ . '/../query_builder/insert.php');
    require_once __DIR__ . "/../../login.php";
    require_once __DIR__ . "/../query_handler/StudentRepository.php";
    require_once __DIR__ . "/../query_handler/ProfessorRepository.php";


    if(isset($_POST['login'])){
        $emri               = $_POST['Name'];
        $password           = $_POST['Password'];


        $conn = (new Database())->connect()->conn;
        $pass_hashed = crypt($password, PASSWORD_BCRYPT);

        if($_POST['Role'] == 'student'){
            $query = mysqli_query($conn, "SELECT * FROM students WHERE student_name='$emri'");
        } else {
            $query = mysqli_query($conn, "SELECT * FROM professors WHERE professor_name='$emri'");
        }

        // $result_can = mysqli_fetch_assoc($query);
        // echo    $result_can;
        $check_password = '';
        while ($row = mysqli_fetch_assoc($query)) {
            if($_POST['Role'] == 'student'){
            $id = $row['student_id'];
            $check_name = $row['student_name'];
            $check_password = $row['student_password'];
            }else{
                $id = $row['professor_id'];
                $check_name = $row['professor_name'];
                $check_password = $row['professor_password'];
            }
        }
        if (password_verify( $password, $check_password)) {
            echo 'Password is valid!';
            session_start();
            $_SESSION['logged_user'] = $id;
            $_SESSION['user_type'] = ($_POST['Role'] == 'student') ? 'student' : 'professor';
            if(($_POST['Role'] == 'student')){
                header("Location: /projekti_PI/pages/student/lendet.php");
            } else {
                header("Location: /projekti_PI/pages/professor/lendet.php");
            }

        }
    }
                //Cookies
                $cookie_name = "user";
                $cookie_value = $emri.",".$password;
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day    
?>
