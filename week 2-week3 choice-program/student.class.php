<?php

    //creating the student class with its properties and functions
    class Student{
        private $name;
        private $subjects;
        private $average;

        //constructor that sets the name for the student
        public function __construct($name, $subjects){
            $this->name = $name;
            $this->subjects = $subjects;
        }

        //function for generating average
        public function getAverage(){
            $total = 0;

            foreach($this->subjects as $subject){
                $total+=$subject;
            }

            $average = $total/(count($this->subjects));            
            $this->average = $average;            
            return $this->average;
        }

        //echoing the subject results, mean and its equivalent grade
        public function displayResults(){
            echo 'NAME: '.$this->name.'<br/><br/>';

            $count = 1;

            foreach($this->subjects as $subject => $marks){
                echo $count.'. '.$subject.'  -  '.$marks.' = '.$this->getGrade($marks).'<br/>';
                $count++;
            }

            echo '<br/>';

            echo 'GRADE: '.$this->getGrade((int)$this->getAverage()).'<br/> AVERAGE: '.$this->getAverage().'<br/>';
            
            //displaying date and time of the process
            echo 'Timestamp: '.date("Y-m-d H:i:s");
        }


        //function for getting the grade for a particular score in a subject
        public function getGrade(int $marks){
            if($marks>=80){
                return 'A';

            }else if($marks >= 75){
                return 'A-';

            }else if($marks >= 70){
                return 'B+';

            }else if($marks >= 65){
                return 'B';

            }else if($marks >= 60){
                return 'B-';

            }else if($marks >= 55){
                return 'C+';

            }else if($marks >= 50){
                return 'C plain';
                
            }else if($marks >= 45){
                return 'C-';

            }else if($marks >= 40){
                return 'D+';
                
            }else if($marks >= 35){
                return 'D';

            }else if($marks >= 30){
                return 'D-';
                
            }else if($marks <= 29){
                return 'E';
                
            }
        }
    }
?>