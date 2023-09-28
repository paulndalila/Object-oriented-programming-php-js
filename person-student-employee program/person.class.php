<?php
    class Person{
        private $first_name;
        private $last_name;
        private $dob;

        public function __construct($first_name, $last_name, $dob){
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->dob = $dob;
        }

        public function getFullname(){

            return $this->first_name.' '.$this->last_name;
        }

        public function getDob(){

            return $this->dob;
        }
    }
?>