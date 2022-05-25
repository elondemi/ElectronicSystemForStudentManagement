<?php

$tableName2 = "students";
$tableName3 = "professors"; 
$tableName4 = "courses";
$tableName5 = "relation_student_course";
$tableName6 = "relation_professor_course";
$tableName7 = "assignment";
$tableName8 = "relation_assignment_professor_student";


$sql2 = "CREATE TABLE $tableName2(
        student_id int ,
        student_name varchar(45),
        student_surname varchar(45),
        student_password varchar(45),
        student_email varchar(45),
        PRIMARY KEY(student_id)
)";
$sql3 = "CREATE TABLE $tableName3(
        professor_id int ,
        professor_name varchar(45),
        professor_surname varchar(45),
        professor_role varchar(45),
        professor_email varchar(45),
        professor_password varchar(45),
        PRIMARY KEY(professor_id)

)";
$sql4 = "CREATE TABLE $tableName4(
        course_id int,
        course_name varchar(45),
        course_description text,
        course_ects int,
        course_semester int,
        PRIMARY KEY(course_id)

)";//date
$sql5 = "CREATE TABLE $tableName5(
        log_id int,
        student_id int,
        course_id int,
        time_of_choosing datetime, 
        PRIMARY KEY (log_id),
        FOREIGN KEY (student_id) REFERENCES $tableName2(student_id),
        FOREIGN KEY (course_id) REFERENCES $tableName4(course_id)
)";
$sql6 = "CREATE TABLE $tableName6(
        professor_course_id int ,
        professor_id int,
        course_id int,
        PRIMARY KEY (professor_course_id),
        FOREIGN KEY (course_id) REFERENCES $tableName4(course_id),
        FOREIGN KEY (professor_id) REFERENCES $tableName3(professor_id)        
)";
$sql7 = "CREATE TABLE $tableName7(
        assignment_id int,
        course_id int,
        assignment_title varchar(45),
        assignment_description text,
        assignment_deadline datetime,
        PRIMARY KEY (assignment_id),
        FOREIGN KEY (course_id) REFERENCES $tableName4(course_id)
)";

$sql8 = "CREATE TABLE $tableName8(
    assignment_professor_student_id int,
    assignment_id int,
    professor_id int,
    student_id int,
    assignment_accept datetime,
    assignmet_grade int,
    assignmet_link text,
    PRIMARY KEY (assignment_professor_student_id),
    FOREIGN KEY (assignment_id) REFERENCES $tableName7(assignment_id),
    FOREIGN KEY (professor_id) REFERENCES $tableName3(professor_id),
    FOREIGN KEY (student_id) REFERENCES $tableName2(student_id)
)";


$retval = mysqli_query($con, $sql2);
$retval = mysqli_query($con, $sql3);
$retval = mysqli_query($con, $sql4);
$retval = mysqli_query($con, $sql5);
$retval = mysqli_query($con, $sql6);
$retval = mysqli_query($con, $sql7);
$retval = mysqli_query($con, $sql8);

?>