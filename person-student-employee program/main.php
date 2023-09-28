<?php
    include_once 'employee.class.php';
    include_once 'student.class.php';

    //output from the Person instance
    $person = new Person('Yvonne', 'mumbi', '2001-04-02');    
    echo 'Full Name: '.$person->getFullname().'<br/>';    
    echo 'Date Of Birth: '.$person->getDob().'<br/>';

    echo '<br/>';

    //output from the Student instance
    $student = new Student('Paul', 'Ndalila', '2000-04-02', 'cit/00225/019', 'Maseno');    
    echo 'Full Name: '.$student->getFullname().'<br/>';    
    echo 'Date Of Birth: '.$student->getDob().'<br/>';    
    echo 'Student ID: '.$student->getStudentId().'<br/>';    
    echo 'Institution: '.$student->getInstitutionName().'<br/>';

    echo '<br/>';

    //output from the Employee instance
    $employee = new Employee('Samuel', 'wafula', '1995-06-02', '11579609', 'IT Department');    
    echo 'Full Name: '.$employee->getFullname().'<br/>';    
    echo 'Date Of Birth: '.$employee->getDob().'<br/>';    
    echo 'Employee ID: '.$employee->getEmployeeid().'<br/>';    
    echo 'Department: '.$employee->getDepartment();

?>