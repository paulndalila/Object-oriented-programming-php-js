<?php
    class Student{
        private $adm_no;
        private $full_name;
        private $library_card_number;
        private $mobile_num;
        private $email_address;

        public function __construct($adm_no, $full_name, $library_card_number, $mobile_num, $email_address){
            $this->adm_no = $adm_no;
            $this->full_name = $full_name;
            $this->mobile_num = $mobile_num;
            $this->email_address = $email_address;
            $this->library_card_number = $library_card_number;
        }

        public function getStudentDetails(){
            $student_details = [
                'Admission Num'=>$this->adm_no,
                'Full Name'=>$this->full_name,
                'Library Card Num'=>$this->library_card_number,
                'Mobile'=>$this->mobile_num,
                'Email'=>$this->email_address
            ];

            return $student_details;
        }

    }
?>