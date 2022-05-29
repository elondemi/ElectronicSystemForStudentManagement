<?php
require "../../resources/parts/header_student.php";
require_once __DIR__ . "/../../resources/FormHandlers/fjalekalimi/modifiko.php";



if (session_status() === PHP_SESSION_NONE) {
    session_start();
}   
if (isset($_SESSION['logged_user'])) {
    require_once __DIR__ . "/../../resources/FormHandlers/fjalekalimi/modifiko.php";
    require_once __DIR__ . "/../../resources/query_handler/StudentRepository.php";
    require_once __DIR__ . "/../../resources/query_handler/StudentCourseRepository.php";

    if ($_SESSION['user_type'] == 'student') {
        $students = (new StudentRepository())->selectStudent((int)$_SESSION['logged_user']);

        // var_dump($assignments);
        // die();
    }
} else {
    //useri nuk eshte logu 
}



?>
<!DOCTYPE html>
<html>

<head>
    <title>Studentpage</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="../../resources/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../../resources/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../resources/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../resources/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../resources/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../resources/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="../../resources/assets/css/student.css" rel="stylesheet">
    <script src="../../resources/assets/js/student.js"></script>
</head>

<body>

    <?php render_header($students)  ?>
    <div class="Modifiko">
        <p style="text-align: left;color:rgb(255, 246, 246);margin-left:35px;margin-top:15px;font-weight: bold;font-size: 25px;margin-bottom:30px;">Modifiko te Dhenat </p>
        <hr>
        <div style="margin-left:100px;margin-top: 60px;">
            <form action="modifiko_profilin.php?student_id=<?= $students->getStudent_id() ?>" method="post">
                <h3>Ndrysho Fjalekalimin </h3>
                <span style="color:red;"> <?php echo $error ?> </br> </span>
                <label for="fjalekalimi_vjeter">Fjalekalimi i vjeter:</label>
                <input type="password" id="fjalekalimi_vjeter" name="fjalekalimi_vjeter"><br><br>
                <label for="fjalekalimi_ri">Fjalekalimi i ri:</label>
                <input type="password" id="fjalekalimi_ri" name="fjalekalimi_ri"><br><br>
                <input type="submit" name="modifiko_profilin" value="Ruaj"><br><br>
                <hr>
            </form>
        </div>
    </div>
</body>

</html>