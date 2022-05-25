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
include_once __DIR__ . "/../query_builder/abstract.php"; 
include_once __DIR__ . "/../utils/db.php";
include_once __DIR__ . "/../models/professors.php";


class ProfessorRepository
{
    // private Connection $connection;
    private $connection;


    public function __construct()
    {   
        $connection = (new Database())->connect();
        $this->connection = $connection;
    }

    public function createProfessor(professors $obj): professors
    {
        $builder = InsertQueryBuilder::create('professors')
            ->add('professor_name', $obj->getProfessor_name())
            ->add('professor_surname', $obj->getProfessor_surname())
            ->add('professor_role', $obj->getProfessor_role())
            ->add('professor_password', $obj->getProfessor_password())
            ->add('professor_email ', $obj->getProfessor_email());
        $bindparamTypes =  implode(array_map(fn($el) => $builder->detectType($el), $builder->getValues()));
        $stmt = $this->connection->execute($builder->getQuery(), $bindparamTypes, $builder->getValues());
        
        $insert_id = $stmt->insert_id;
        $obj->setProfessor_id($insert_id);
        return $obj;
    }

    
}


 ?>