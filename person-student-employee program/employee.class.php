<?php    
    require_once 'person.class.php';

    class Employee extends Person{
        private $employee_id;
        private $department;

        public function __construct($first_name, $last_name, $dob, $employee_id, $department){

            parent::__construct($first_name, $last_name, $dob);
            $this->employee_id = $employee_id;
            $this->department = $department;
        }

        public function getEmployeeid(){

            return $this->employee_id;
        }

        public function getDepartment(){
            
            return $this->department;            
        }
    }
?>