<?php
    require_once 'libraryItem.class.php';
    
    class Dvd extends LibraryItem{
        private $producer;
        private $language;
        private $subtitles_available;

        public function __construct($item_id, $title, $producer, $language){
            
            parent::__construct($item_id, $title);
            $this->producer = $producer;
            $this->language = $language;
        }

        public function noSubtitles(){

            return $this->subtitles_available = false;
        }

        public function subtitlesAvailable(){

            return $this->subtitles_available = true;            
        }

        public function getDvdDetails(){

            $subtitles='No subtitles';

            if($this->subtitles_available){

                $subtitles = 'Has subtitles';
            }else{
                $subtitles = 'Does not have subtitles';
            }


            $dvd_details = [
                'ID'=>$this->getItemId(),
                'Title'=>$this->getItemTitle(),
                'Producer'=>$this->producer,
                'Language'=>$this->language,
                'Subtitles'=>$subtitles
            ];

            return $dvd_details;
        }

    }

?>