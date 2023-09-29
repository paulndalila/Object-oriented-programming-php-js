class Validator{

    static validateEmail(email){
        
        const emailRegex = new RegExp(/^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$/, "gm");
        return emailRegex.test(email);
    }
    
    static validatePassword(password){

        return password.length >= 8;
    }    
    
    static confirmPasswordsMatch(new_pass, confirm_pass){

        if(new_pass.value == confirm_pass.value){

            return true;
        }else{
            return false;
        }
    }

    static redBorder(inpElement){
        inpElement.style.border = "1px Solid Red";
        inpElement.style.outline = "none";
    }

    static greenBorder(inpElement){
        inpElement.style.border = "1px Solid Green";
        inpElement.style.outline = "none";
    }

}

//input elements
const email = document.getElementById('email');
const new_pass = document.getElementById('password');
const confirm_pass = document.getElementById('confirmpassword');
const errorDiv = document.getElementById('error-bar');

//check email input from user
email.addEventListener('input', function(event) {    
    const inputValue = event.target.value;
    if(Validator.validateEmail(inputValue)){
        errorDiv.innerHTML = null;
        Validator.greenBorder(email);
    }else{
        errorDiv.innerHTML = "Email is not valid: ";
        Validator.redBorder(email);
    }
});

//check password input from user
new_pass.addEventListener('input', function(event) {    
    const inputValue = event.target.value;
    if(Validator.validatePassword(inputValue)){
        errorDiv.innerHTML = null;
        Validator.greenBorder(new_pass);
    }else{
        errorDiv.innerHTML = "Weak password";
        Validator.redBorder(new_pass);
    }
});

//check password confirmation input from user
confirm_pass.addEventListener('input', function(event) {    
    const inputValue = event.target.value;
    if(Validator.confirmPasswordsMatch(new_pass, confirm_pass)){
        errorDiv.innerHTML = null;
        Validator.greenBorder(confirm_pass);
    }else{
        errorDiv.innerHTML = "Passwords do not match";
        Validator.redBorder(confirm_pass);
    }
});