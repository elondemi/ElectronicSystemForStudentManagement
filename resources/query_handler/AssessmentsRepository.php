<?php 
// CREATE TABLE relation_assignment_professor_student(
//     assignment_professor_student_id int NOT NULL AUTO_INCREMENT,
//     assignment_id int,
//     professor_id int,
//     student_id int,
//     assignment_accept datetime,
//     assignmet_grade int,
//     assignmet_link text,
//     PRIMARY KEY (assignment_professor_student_id),
//     FOREIGN KEY (assignment_id) REFERENCES assignment(assignment_id),
//     FOREIGN KEY (professor_id) REFERENCES professors(professor_id),
//     FOREIGN KEY (student_id) REFERENCES students(student_id)
// );

include_once __DIR__ . "/../query_builder/insert.php";
include_once __DIR__ . "/../query_builder/select.php"; 
include_once __DIR__ . "/../query_builder/update.php"; 
include_once __DIR__ . "/../query_builder/abstract.php"; 
include_once __DIR__ . "/../utils/db.php";
include_once __DIR__ . "/../models/courses.php";
include_once __DIR__ . "/../models/professors.php";
include_once __DIR__ . "/../models/students.php";
include_once __DIR__ . "/../models/assignment.php";


class AssessmentsRepository
{
    // private Connection $connection;
    private $connection;


    public function __construct()
    {   
        $connection = (new Database())->connect();
        $this->connection = $connection;
    }


 

    public function getAllAssessmentsByProfessor(professors $professor){


        $sql = 'select s.student_name, s.student_surname, c.course_name, a.assignment_title, c.course_semester, relation_assignment_professor_student.assignmet_grade, relation_assignment_professor_student.assignmet_link
        from relation_assignment_professor_student
        inner join assignment a on relation_assignment_professor_student.assignment_id = a.assignment_id
        inner join students s on a.student_id = s.student_id
        inner join courses c on a.course_id = c.course_id where professor_id = ?;';
        
        $professor_id = $professor->getProfessor_id();
        $stmt = $this->connection->conn->prepare($sql);
        $stmt->bind_param("i", $professor_id);
        $stmt->execute();
        $result = $stmt->get_result(); // get the mysqli result
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
        
    }
}

 ?>