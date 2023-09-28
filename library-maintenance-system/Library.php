<?php
    include 'files.inc.php';

    echo 'LIBRARY MAINTENANCE SYSTEM';
    echo '<br/>';

    //book
    $book = new Book('860140094', 'The 48 Laws of Power', 'Robert Greene', 'non-fiction', 'Hudson sellers', '1998');
    $book_details = $book->getBookDetails();
    foreach ($book_details as $details => $detail){
        echo $details." : ".$detail."<br/>";
    }
    $book->checkedOut();

    echo '<br/>';

    //dvd
    $dvd = new Dvd('3441', 'The Pearl film', 'Christopher Lukes', 'English');
    $dvd->noSubtitles();
    $dvd_details = $dvd->getDvdDetails();
    foreach ($dvd_details as $details => $detail){
        echo $details." : ".$detail."<br/>";
    }
    $dvd->checkedOut();
    
    echo '<br/>';

    //Student
    $student = new Student('cit/00225/019', 'Paul Ndalila', '5255', '0769257996', 'paulndalila001@gmail.com');
    $student_details = $student->getStudentDetails();
    foreach ($student_details as $details => $detail){
        echo $details." : ".$detail."<br/>";
    }


?>