<?php include_once("../model/users.php"); ?>
<script>    
    function validateSecurityForm(form){
        var pass = form.pass1.value;
        var valid = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/;
        var warning = "#e43725";
        
        if (pass == "") {
            pass1.style.borderColor = warning;
            error = "You didn't enter a password.\n";
            alert(error);
            return false;

        } else if ((pass.length < 6) || (pass.length > 16)) {
            error = "The password should be more than 6 characters and less than 16 characters. \n";
            pass1.style.borderColor = warning;
            alert(error);
            return false;

        } else if (!pass.match(valid)){
            error = "The password must contain one lowercase letter, one uppercase letter and one numeric digit.\n";
            pass1.style.borderColor = warning;
            alert(error);
            return false;
        
        } else {
            return true;
        }
    }
        
    function checkPassSame(){ 
        //Store the password field objects into variables ...
        var pass1 = document.getElementById('pass1');
        var pass2 = document.getElementById('pass2');
        //Store the Confimation Message Object ...
        var message = document.getElementById('confirmMessage');
        //Set the colors we will be using ...
        var success = "#128f76";
        var warning = "#e43725";
        //Compare the values in the password field 
        //and the confirmation field
        if(pass1.value == pass2.value){
            //The passwords match. 
            //Set the color to the good color and inform
            //the user that they have entered the correct password 
            pass2.style.borderColor = success;
        }else{
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
            pass2.style.borderColor = warning;
            alert("Passwords Do Not Match!");
        }
    }
    
    function validateRegisterForm(form){
        var valid = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/;
        var warning = "#e43725";
        var msg = ''
        if(!checkuname(form.user_name.value)){
            msg ="Please enter a valid user name.<br/> ";
        }
        //now we check the email address
        //check if the email address is empty
        if(empty(form.email.value)){
            msg =" Please enter an email address.<br/> ";
        }
        if(empty(form.gender.value)){
            msg =" Please select your gender.<br/> ";
        }
        /*Next we check if the email address has a valid format
        if(!checkEmail(form.email)){
        $msg="Please enter a valid email address.<br/>";
        }
        */
        //now we check the password
        //first we check that both password fields are filled in
        if(empty(form.pass1.value)){
            msg =" Please enter a password. ";
        }
        if(empty(form.pass2.value)){
            msg =" Please enter a valid confirmation password. ";
        }
        if(empty(form.pf_name.value)){
            msg =" Please enter a preferred name. ";
        }
        //now we check to see if the passwords match
        if(form.pass1 !== form.pass2){
            msg =" Your password does not match the confirmation password please check and try again.";
        }
        
        if(empty(msg)){
            return true;
        }
        else{
            alert(error);
            return false;
        }
    }
    
</script>