<?php
    require_once 'libraryItem.class.php';
    
    class Book extends LibraryItem{
        private $author;
        private $genre;
        private $publisher;
        private $publication_year;

        public function __construct($item_id, $title, $author, $genre, $publisher, $publication_year){
            
            parent::__construct($item_id, $title);
            $this->author = $author;
            $this->genre = $genre;
            $this->publisher = $publisher;
            $this->publication_year = $publication_year;
        }

        public function getBookDetails(){
            $book_details = [
                'ID'=>$this->getItemId(),
                'Title'=>$this->getItemTitle(),
                'Author'=>$this->author,
                'Genre'=>$this->genre,
                'Publisher'=>$this->publisher,
                'Year Published'=>$this->publication_year
            ];

            return $book_details;
        }

    }
?>