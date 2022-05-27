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
            ->add('professor_id', $obj->getProfessor_id())
            ->add('professor_name', $obj->getProfessor_name())
            ->add('professor_surname', $obj->getProfessor_surname())
            ->add('professor_role', $obj->getProfessor_role())
            ->add('professor_email ', $obj->getProfessor_email())
            ->add('professor_password', $obj->getProfessor_password());
        $bindparamTypes =  implode(array_map(fn($el) => $builder->detectType($el), $builder->getValues()));
        $stmt = $this->connection->execute($builder->getQuery(), $bindparamTypes, $builder->getValues());
        
        $insert_id = $stmt->insert_id;
        $obj->setProfessor_id($insert_id);
        return $obj;
    }

    public function selectProfessor($id): professors {
        $sql = "SELECT * FROM professors WHERE professor_id=?"; // SQL with parameters
        $stmt = $this->connection->conn->prepare($sql); 
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result(); // get the mysqli result
        $user = $result->fetch_assoc();
        // $professor_name,$professor_surname,$professor_role,$professor_email,$professor_password
        return new professors($user['professor_id'],$user['professor_name'], $user['professor_surname'], $user['professor_role'], $user['professor_email'], $user['professor_password']);
    }
}


 ?>