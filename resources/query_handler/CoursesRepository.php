<?php 
// CREATE TABLE professors(
//     professor_id int ,
//     professor_name varchar(45),
//     professor_surname varchar(45),
//     professor_role varchar(45),
//     professor_email varchar(45),
//     professor_password varchar(45),
//     PRIMARY KEY(professor_id)

// );

require_once __DIR__ . "/../query_builder/insert.php";
require_once __DIR__ . "/../query_builder/select.php"; 
require_once __DIR__ . "/../query_builder/update.php"; 

require_once __DIR__ . "/../query_builder/abstract.php"; 
require_once __DIR__ . "/../utils/db.php";
require_once __DIR__ . "/../models/courses.php";
require_once __DIR__ . "/../models/professors.php";


class CoursesRepository
{
    // private Connection $connection;
    private $connection;


    public function __construct()
    {   
        $connection = (new Database())->connect();
        $this->connection = $connection;
    }

    public function getCourse($id) : courses{
        $sql = "select *
        from courses where course_id = ?;"; // SQL with parameters
        $stmt = $this->connection->conn->prepare($sql); 
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result(); // get the mysqli result
        $course = mysqli_fetch_assoc($result);
        return new courses($course['course_id'],$course['course_name'],$course['course_description'],$course['course_ects'],$course['course_semester']);
    }

    public function selectEnrolledBy(students $student): array {
        $sql = "select courses.*
        from courses inner join relation_student_course on courses.course_id = relation_student_course.course_id
        where relation_student_course.student_id = ?;"; // SQL with parameters
        $stmt = $this->connection->conn->prepare($sql); 
        $student_id = $student->getStudent_id();
        $stmt->bind_param("i", $student_id);
        $stmt->execute();
        $result = $stmt->get_result(); // get the mysqli result
        $courses = array_map(function($course){
            return new courses($course['course_id'],$course['course_name'],$course['course_description'],$course['course_ects'],$course['course_semester']);
        }, mysqli_fetch_all($result, MYSQLI_ASSOC));
        // die();
        return $courses;   
    }

    public function selectNotEnrolledYet(students $student): array {
        $sql = "select courses.* from courses
        left join relation_student_course rsc on courses.course_id = rsc.course_id and rsc.student_id = ?
        where rsc.student_id is null;"; // SQL with parameters
        $stmt = $this->connection->conn->prepare($sql); 
        $student_id = $student->getStudent_id();
        $stmt->bind_param("i", $student_id);
        $stmt->execute();
        $result = $stmt->get_result(); // get the mysqli result
        $courses = array_map(function($course){
            return new courses($course['course_id'],$course['course_name'],$course['course_description'],$course['course_ects'],$course['course_semester']);
        }, mysqli_fetch_all($result, MYSQLI_ASSOC));
        // die();
        return $courses;   
    }

    
    public function selectAllCourses(): array {
        $sql = "select *
        from courses inner join relation_professor_course rpc on courses.course_id = rpc.course_id"; // SQL with parameters
        $stmt = $this->connection->conn->prepare($sql); 
        $stmt->execute();
        $result = $stmt->get_result(); // get the mysqli result
        $courses = array_map(function($course){
            // echo var_dump($course);
            // die();
            return new courses($course['course_id'],$course['course_name'],$course['course_description'],$course['course_ects'],$course['course_semester']);
        }, mysqli_fetch_all($result, MYSQLI_ASSOC));
        // die();
        return $courses;
    }

    public function selectAllSubjects($teached_by_professor): array {
        $sql = "select *
        from courses inner join relation_professor_course rpc on courses.course_id = rpc.course_id
        where professor_id = ?;"; // SQL with parameters
        $stmt = $this->connection->conn->prepare($sql); 
        $professor_id = $teached_by_professor->getProfessor_id();
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



    public function selectCourses($students): array {
        $sql = "select c.course_name, c.course_semester , a.assignment_title, relation_assignment_professor_student.assignmet_link
        from relation_assignment_professor_student
        inner join assignment a on relation_assignment_professor_student.assignment_id = a.assignment_id
        inner join courses c on a.course_id = c.course_id
        where a.student_id = ?"; // SQL with parameters
        $stmt = $this->connection->conn->prepare($sql); 
            $student_id = $students->getStudent_id();
            $stmt->bind_param("i", $student_id);
            $stmt->execute();
            $result = $stmt->get_result(); // get the mysqli result
            $courses = array_map(function($course){
                return new courses($course['course_id'],$course['course_name'],$course['course_description'],$course['course_ects'],$course['course_semester']);
            }, mysqli_fetch_all($result, MYSQLI_ASSOC));
            // die();
            return $courses;
            // $professor_name,$professor_surname,$professor_role,$professor_email,$professor_password
            // return new professors($user['professor_id'],$user['professor_name'], $user['professor_surname'], $user['professor_role'], $user['professor_email'], $user['professor_password']);
        }




    public function updateCourse(courses $course) {
        $builder = UpdateQueryBuilder::create('courses')
            ->add('course_description', $course->getCourse_description())
            ->addWhere('course_id', $course->getCourse_id(), 'i');
        $bindparamTypes =  implode(array_map(fn($el) => $builder->detectType($el), $builder->getValues()));
        // var_dump($builder->getQuery(),  $bindparamTypes , $builder->getValues());

        $stmt = $this->connection->execute($builder->getQuery(), $bindparamTypes, [...$builder->getValues()]);
        return;
    }

    public function addCourse(courses $course){
        $builder = InsertQueryBuilder::create('courses')
        ->add('course_name', $course -> getCourse_name())
        ->add('course_description', $course -> getCourse_description())
        ->add('course_ects', $course -> getCourse_ects())
        ->add('course_semester', $course -> getCourse_semester());
        $bindparamTypes =  implode(array_map(fn($el) => $builder->detectType($el), $builder->getValues()));
        $stmt = $this->connection->execute($builder->getQuery(), $bindparamTypes, $builder->getValues());
        $insert_id = $stmt->insert_id;
        $course->setCourse_id($insert_id);

        return $course;
    }

    public function linkToProfessor(courses &$course, professors &$professor) {
        $builder = InsertQueryBuilder::create('relation_professor_course')
        ->add('professor_id', $professor->getProfessor_id())
        ->add('course_id', $course->getCourse_id());
        $bindparamTypes =  implode(array_map(fn($el) => $builder->detectType($el), $builder->getValues()));
        $stmt = $this->connection->execute($builder->getQuery(), $bindparamTypes, $builder->getValues());
        return;
    }

    public function linkToStudent(courses &$course, students &$student) {
        $builder = InsertQueryBuilder::create('relation_student_course')
        ->add('student_id', $student->getStudent_id())
        ->add('course_id', $course->getCourse_id());
        $bindparamTypes =  implode(array_map(fn($el) => $builder->detectType($el), $builder->getValues()));
        $stmt = $this->connection->execute($builder->getQuery(), $bindparamTypes, $builder->getValues());
        return;
        
    }

}


 ?>