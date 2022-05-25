<?php
// CREATE TABLE courses(
//     course_id int,
//     course_name varchar(45),
//     course_description text,
//     course_ects int,
//     course_semester int,
//     PRIMARY KEY(course_id)

// );


class courses{
    private $course_id;
    private $course_name;
    private $course_description;
    private $course_ects;
    private $course_semester;

     function __construct($course_id,$course_name,$course_description,$course_ects,$course_semester) {
        $this->course_id=$course_id;
        $this->course_name=$course_name;
        $this->course_description=$course_description;
        $this->course_ects=$course_ects;
        $this->course_semester=$course_semester;   
    }
 
    public function getCourse_id()
    {
        return $this->course_id;
    }

    public function setCourse_id($course_id)
    {
        $this->course_id = $course_id;
    }

    public function getCourse_name()
    {
        return $this->course_name;
    }

    public function setCourse_name($course_name)
    {
        $this->course_name = $course_name;
    }

    public function getCourse_description()
    {
        return $this->course_description;
    }

    public function setCourse_description($course_description)
    {
        $this->course_description = $course_description
    }


    public function getCourse_ects()
    {
        return $this->course_ects;
    }


    public function setCourse_ects($course_ects)
    {
        $this->course_ects = $course_ects;
    }


    public function getCourse_semester()
    {
        return $this->course_semester;
    }

 
    public function setCourse_semester($course_semester)
    {
        $this->course_semester = $course_semester;

    }
}

?>