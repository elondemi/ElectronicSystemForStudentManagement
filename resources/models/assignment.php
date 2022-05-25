<?php 
// CREATE TABLE assignment
// (
//     assignment_id          int,
//     course_id              int,
//     assignment_title       varchar(45),
//     assignment_description text,
//     assignment_deadline    datetime,
//     PRIMARY KEY (assignment_id),
//     FOREIGN KEY (course_id) REFERENCES courses (course_id)
// );


    class assignment{
        private $assignment_id;
        private $course_id;
        private $assignment_title;
        private $assignment_description;
        private $assignment_deadline;

         function __construct($assignment_id,$course_id,$assignment_title,$assignment_description,$assignment_deadline) {
            $this->assignment_id=$assignment_id;
            $this->course_id=$course_id;
            $this->assignment_title=$assignment_title;
            $this->assignment_description=$assignment_description;
            $this->assignment_deadline=$assignment_deadline;
        }

        public function getAssignment_id()
        {
                return $this->assignment_id;
        }

        public function setAssignment_id($assignment_id)
        {
                $this->assignment_id = $assignment_id;
        }


        public function getCourse_id()
        {
                return $this->course_id;
        }

        public function setCourse_id($course_id)
        {
                $this->course_id = $course_id;
        }

        public function getAssignment_title()
        {
                return $this->assignment_title;
        }

        public function setAssignment_title($assignment_title)
        {
                $this->assignment_title = $assignment_title;
        }

 
        public function getAssignment_description()
        {
                return $this->assignment_description;
        }

 
        public function setAssignment_description($assignment_description)
        {
                $this->assignment_description = $assignment_description;
        }


        public function getAssignment_deadline()
        {
                return $this->assignment_deadline;
        }

        public function setAssignment_deadline($assignment_deadline)
        {
                $this->assignment_deadline = $assignment_deadline;
        }
    }

?>