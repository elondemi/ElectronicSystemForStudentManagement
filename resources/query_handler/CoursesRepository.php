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

include_once __DIR__ . "/../query_builder/insert.php";
include_once __DIR__ . "/../query_builder/select.php"; 
include_once __DIR__ . "/../query_builder/update.php"; 

include_once __DIR__ . "/../query_builder/abstract.php"; 
include_once __DIR__ . "/../utils/db.php";
include_once __DIR__ . "/../models/courses.php";
include_once __DIR__ . "/../models/professors.php";


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


    public function updateCourse(courses $course) {
        $builder = UpdateQueryBuilder::create('courses')
            ->add('course_description', $course->getCourse_description())
            ->addWhere('course_id', $course->getCourse_id(), 'i');
        $bindparamTypes =  implode(array_map(fn($el) => $builder->detectType($el), $builder->getValues()));
        // var_dump($builder->getQuery(),  $bindparamTypes , $builder->getValues());

        $stmt = $this->connection->execute($builder->getQuery(), $bindparamTypes, [...$builder->getValues()]);
        return;
    }

    // public function addCourse(course $name, course $description, course $ects, course $semester){
    //     $builder = InsertQueryBuilder::create('courses')
    //     ->add('course_name', $name -> getCourse_name())
    //     ->add('course_description', $description -> getCourse_description())
    //     ->add('course_ects', $ects -> getCourse_ects())
    //     ->add('course_semester', $semester -> getCourse_semester())

    // }
}


 ?>