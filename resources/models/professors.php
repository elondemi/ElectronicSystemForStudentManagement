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


class professors{
    private $professor_id;
    private $professor_name;
    private $professor_surname;
    private $professor_role;
    private $professor_email;
    private $professor_password;


    function __construct($professor_id,$professor_name,$professor_surname,$professor_role,$professor_email,$professor_password) {
        $this->professor_id=$professor_id;
        $this->professor_name=$professor_name;
        $this->professor_surname=$professor_surname;
        $this->professor_role=$professor_role;
        $this->professor_email=$professor_email;
        $this->professor_password=$professor_password;
    }

   
    public function getProfessor_id()
    {
        return $this->professor_id;
    }

    public function setProfessor_id($professor_id)
    {
        $this->professor_id = $professor_id;
    }

 
    public function getProfessor_name()
    {
        return $this->professor_name;
    }

    public function setProfessor_name($professor_name)
    {
        $this->professor_name = $professor_name;
    }

    public function getProfessor_surname()
    {
        return $this->professor_surname;
    }

    public function setProfessor_surname($professor_surname)
    {
        $this->professor_surname = $professor_surname;
    }

    public function getProfessor_email()
    {
        return $this->professor_email;
    }

    public function setProfessor_email($professor_email)
    {
        $this->professor_email = $professor_email;
    }

  
    public function getProfessor_password()
    {
        return $this->professor_password;
    }


    public function setProfessor_password($professor_password)
    {
        $this->professor_password = $professor_password;

    }

   
    public function getProfessor_role()
    {
        return $this->professor_role;
    }


    public function setProfessor_role($professor_role)
    {
        $this->professor_role = $professor_role;
        return $this;
    }
}

?>