<?php
    class Validator {
        public static function validateEmail($email){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                return true;
            }else{
                return false;
            }
        }

        public static function validatePassword($pass){
            if(strlen($pass) >= 8){
                return true;
            }else{
                return false;
            }
        }   
    
        public static function confirmPasswordsMatch($new_pass, $confirm_pass){
            if($new_pass === $confirm_pass){
    
                return true;
            }else{
                return false;
            }
        }
    }
?>