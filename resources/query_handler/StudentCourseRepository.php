
<?php
include_once __DIR__ . "/../query_builder/insert.php";
include_once __DIR__ . "/../query_builder/select.php"; 
include_once __DIR__ . "/../query_builder/update.php"; 
include_once __DIR__ . "/../query_builder/abstract.php"; 
include_once __DIR__ . "/../utils/db.php";
include_once __DIR__ . "/../models/courses.php";
include_once __DIR__ . "/../models/students.php";

class StudentCoursesRepository
{
    // private Connection $connection;
    private $connection;


    public function __construct()
    {   
        $connection = (new Database())->connect();
        $this->connection = $connection;
    }

    public function selectAllSubjects($selected_Student): array {
        $sql = "select *
        from courses inner join relation_professor_course rpc on courses.course_id = rpc.course_id
        where professor_id = ?;"; // SQL with parameters
        $stmt = $this->connection->conn->prepare($sql); 
        $professor_id = $selected_Student->getProfessor_id();
        $stmt->bind_param("i", $professor_id);
        $stmt->execute();
        $result = $stmt->get_result(); // get the mysqli result
        $courses = array_map(function($course){
            // echo var_dump($course);
            // die();
            return new courses($course['course_id'],$course['course_name'],$course['course_description'],$course['course_ects'],$course['course_semester']);
        }, mysqli_fetch_all($result, MYSQLI_ASSOC));
        // die();
        return $courses;
        // $professor_name,$professor_surname,$professor_role,$professor_email,$professor_password
        // return new professors($user['professor_id'],$user['professor_name'], $user['professor_surname'], $user['professor_role'], $user['professor_email'], $user['professor_password']);
    }

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