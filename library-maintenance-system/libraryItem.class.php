<?php
    class LibraryItem{
        private $item_id;
        private $title;
        private $isCheckedIn;

        public function __construct($item_id, $title){
            $this->item_id = $item_id;
            $this->title = $title;
        }

        public function checkedIn(){

            return $this->isCheckedIn = true;
        }

        public function checkedOut(){
            
            return $this->isCheckedIn = false;
        }

        public function getItemId(){

            return $this->item_id;
        }

        public function getItemTitle(){
            
            return $this->title;
        }
    }
?>