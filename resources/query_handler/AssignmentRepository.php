<?php 
// CREATE TABLE assignment
// (
//     assignment_id          int NOT NULL AUTO_INCREMENT,
//     course_id              int,
//     assignment_title       varchar(45),
//     assignment_description text,
//     assignment_deadline    datetime,
//     PRIMARY KEY (assignment_id),
//     FOREIGN KEY (course_id) REFERENCES courses (course_id)
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


class AssignmentRepository
{
    // private Connection $connection;
    private $connection;


    public function __construct()
    {   
        $connection = (new Database())->connect();
        $this->connection = $connection;
    }


    // public function getAll(){
    //     $sql = 'select assignment.*, students.*
    //     from assignment
    //     inner join students on assignment.student_id = students.student_id;';
    // }

    // public function get($id){
    //     $sql = 'select assignment.*, students.*
    //     from assignment
    //     inner join students on assignment.student_id = students.student_id where assignment.assignment_id = ?;';

    // }

    // public function getAllByCourse(courses $course){
    //     $sql = 'select assignment.*, students.*
    //     from assignment
    //     inner join students on assignment.student_id = students.student_id where assignment.course_id = ?;';
    // }

    public function getAllByCourses(array $courses){

        $ids = array_map(function($course) {
            return $course->getCourse_id();
        }, $courses);
        $clause = implode(',', array_fill(0, count($ids), '?'));

        $sql = 'select assignment.*, students.*
        from assignment
        inner join students on assignment.student_id = students.student_id where assignment.course_id in (' . $clause . ') order by assignment.course_id';
        
        $stmt = $this->connection->conn->prepare($sql);
        $stmt->bind_param(implode(array_map(fn($el) =>  "i", $ids)), ...$ids);
        $stmt->execute();
        $result = $stmt->get_result(); // get the mysqli result

        return array_map(function($el) {
            return [
                // $student_id,$student_name,$student_surname,$student_password,$student_email
                "student" => new students($el["student_id"],$el["student_name"], $el["student_surname"], $el["student_password"], $el["student_email"]),
                // $assignment_id,$course_id,$assignment_title,$assignment_description,$assignment_deadline, $assignment_student_id
                // ["assignment_id"]=> int(1) ["course_id"]=> int(8) ["assignment_title"]=> string(5) "MySQL" ["assignment_description"]=> string(15) "Detyre me MYSQL" ["assignment_deadline"]=> string(19) "2022-07-29 13:08:50"
                "assignment" => new assignment($el["assignment_id"], $el["course_id"], $el["assignment_title"], $el["assignment_description"], $el["assignment_deadline"], $el["student_id"])
            ];
        }, mysqli_fetch_all($result, MYSQLI_ASSOC));
        
        // $user = $result->fetch_assoc();
        // return new professors($user['professor_id'],$user['professor_name'], $user['professor_surname'], $user['professor_role'], $user['professor_email'], $user['professor_password']);
    }
}

 ?>