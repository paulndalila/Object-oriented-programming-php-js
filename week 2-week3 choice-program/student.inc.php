<?php

    //including the file containing the student class
    include 'student.class.php';

    //surrounding the process in a try catch block to get errors incase some may arise
    try{

        //student name
        $name = "Paul Ndalila";

        //associative array for the subjects
        $subjectMarks = [
            "Math" => 90,
            "English" => 80,
            "Kiswahili" => 88,
            "Chemistry" => 70,
            "Biology" => 60,
            "History" => 94,
            "Geography" => 86,
            "Physics" => 78
        ];

        //creating an instance of the student
        $student = new Student($name, $subjectMarks);

        //displaying the grades and the average back to the user
        $student->displayResults();

    }catch(Exception $e){
        //displayiing any errors that may arise
        echo 'Error: '.$e->getMessage();
    }

?>