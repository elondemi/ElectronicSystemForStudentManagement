<?php 
// CREATE TABLE students(
//     student_id int,
//     student_name varchar(45),
//     student_surname varchar(45),
//     student_password varchar(45),
//     student_email varchar(45),
//     PRIMARY KEY(student_id)
// );
include_once __DIR__ . "/../query_builder/insert.php"; 
include_once __DIR__ . "/../query_builder/abstract.php"; 
include_once __DIR__ . "/../query_builder/update.php"; 
include_once __DIR__ . "/../utils/db.php";
include_once __DIR__ . "/../models/students.php";


class StudentRepository
{
    // private Connection $connection;
    private $connection;


    public function __construct()
    {   
        $connection = (new Database())->connect();
        $this->connection = $connection;
    }

    public function createStudent(students $obj): students
    {
        $builder = InsertQueryBuilder::create('students')
        ->add('student_id', $obj->getStudent_id())
            ->add('student_name', $obj->getStudent_name())
            ->add('student_surname', $obj->getStudent_surname())
            ->add('student_password', $obj->getStudent_password())
            ->add('student_email ', $obj->getStudent_email());
        $bindparamTypes =  implode(array_map(fn($el) => $builder->detectType($el), $builder->getValues()));
        $stmt = $this->connection->execute($builder->getQuery(), $bindparamTypes, $builder->getValues());
        
        $insert_id = $stmt->insert_id;
        $obj->setStudent_id($insert_id);
        return $obj;
    }
    
    public function selectStudent($id): students {
        $sql = "SELECT * FROM students WHERE student_id=?"; // SQL with parameters
        $stmt = $this->connection->conn->prepare($sql); 
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result(); // get the mysqli result
        $user = $result->fetch_assoc();
        // $professor_name,$professor_surname,$professor_role,$professor_email,$professor_password
        return new students($user['student_id'], $user['student_name'], $user['student_surname'], $user['student_password'], $user['student_email']);
    }

    public function updateStudent(students $student) {
        $builder = UpdateQueryBuilder::create('students')
            ->add('student_password', $student->getStudent_password())
            ->addWhere('student_id', $student->getStudent_id(), 'i');
        $bindparamTypes =  implode(array_map(fn($el) => $builder->detectType($el), $builder->getValues()));
        // var_dump($builder->getQuery(),  $bindparamTypes , $builder->getValues());    
        $stmt = $this->connection->execute($builder->getQuery(), $bindparamTypes, [...$builder->getValues()]);
        return;
    }

    
}


 ?>