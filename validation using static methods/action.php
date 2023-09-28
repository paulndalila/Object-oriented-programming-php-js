<?php
    require_once 'validator.class.php';

    //getting user input
    $email = $_POST['email'];
    $new_pass = $_POST['password'];
    $con_pass = $_POST['confirmpassword'];

    //validate input fields
    if(isset($_POST['submit'])){
        if(Validator::validateEmail($email)){
            echo 'Valid Email';
        }else{
            echo 'Invalid email';
        }
    
        echo '<br/>';
    
        if(Validator::validatePassword($new_pass)){
            echo 'Strong Password';
        }else{
            echo 'Weak password';
        }
    
            echo '<br/>';
    
        if(Validator::confirmPasswordsMatch($new_pass, $con_pass)){
            echo 'Matching email addresses';
        }else{
            echo 'Emails do not match';
        }
    }
?>