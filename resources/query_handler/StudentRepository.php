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
            ->add('student_name', $obj->getStudent_name())
            ->add('student_surname', $obj->getStudent_surname())
            ->add('student_password', $obj->getStudent_password())
            ->add('student_email ', $obj->getStudent_email());
        $bindparamTypes =  implode(array_map(fn($el) => $builder->detectType($el), $builder->getValues()));
        $stmt = $this->connection->execute($builder->getQuery(), $bindparamTypes, $builder->getValues());
        
        $insert_id = $stmt->insert_id;
        // $rows = $result->fetch_assoc();
        // return new student($rows['id'],$rows['student_name'],$rows['student_surname'],$rows['student_password'],$rows['student_email']);
        $obj->setStudent_id($insert_id);
        return $obj;
    }

    
}


 ?>