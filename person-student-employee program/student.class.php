<?php
    require_once 'person.class.php';

    class Student extends Person{
        private $student_id;
        private $institution;

        public function __construct($first_name, $last_name, $dob, $student_id, $institution){

            parent::__construct($first_name, $last_name, $dob);
            $this->student_id = $student_id;
            $this->institution = $institution;
        }

        public function getStudentId(){

            return $this->student_id;        
        }

        public function getInstitutionName(){

            return $this->institution;
            
        }
    }
?>