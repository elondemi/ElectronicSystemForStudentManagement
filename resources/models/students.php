<?php



// CREATE TABLE students(
//     student_id int,
//     student_name varchar(45),
//     student_surname varchar(45),
//     student_password varchar(45),
//     student_email varchar(45),
//     PRIMARY KEY(student_id)
// );

class students{
    private $student_id;
    private $student_name;
    private $student_surname;
    private $student_password;
    private $student_email;

    function __construct($student_id,$student_name,$student_surname,$student_password,$student_email) {
        $this->student_id=$student_id;
        $this->student_name=$student_name;
        $this->student_surname=$student_surname;
        $this->student_password=$student_password;
        $this->student_email=$student_email;
    }

 
    public function getStudent_id()
    {
        return $this->student_id;
    }

    public function setStudent_id($student_id)
    {
        $this->student_id = $student_id;
    }

  
    public function getStudent_name()
    {
        return $this->student_name;
    }


    public function setStudent_name($student_name)
    {
        $this->student_name = $student_name;
    }


    public function getStudent_surname()
    {
        return $this->student_surname;
    }

    
    public function setStudent_surname($student_surname)
    {
        $this->student_surname = $student_surname;

    }

    public function getStudent_password()
    {
        return $this->student_password;
    }

  
    public function setStudent_password($student_password)
    {
        $this->student_password = $student_password;
    }

  
    public function getStudent_email()
    {
        return $this->student_email;
    }

 
    public function setStudent_email($student_email)
    {
        $this->student_email = $student_email;
    }
}

?>