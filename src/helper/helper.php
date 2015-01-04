<?php include_once("../model/users.php"); ?>
<script>    
    function validateSecurityForm(form){

        var pass = form.pass1.value;
        var warning = "#e43725";

        if (checkPassword(pass) != ""){
            form.pass1.focus();
            error = checkPassword(pass);
            alert(error);
            return false;
        
        } else {
            console.log(true);
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
    
    function validateRegistrationForm(form){
        var pass1 = form.pass1.value;
        var uname = form.user_name.value;
        var pf_name = form.pf_name.value;
        var email = form.email.value;
        var uname_valid = /^[\w ]+$/;
        var email_valid = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var warning = "#e43725";
        var error = "";

        if (checkPassword(pass1) !== ""){
            form.pass1.focus();
            error = checkPassword(pass1);
        
        } else if (!uname.match(uname_valid)){
            error = "The username must contain alphabets and numeric digits only.\n";
            form.user_name.focus();
        
        }else if (pf_name === "" ){
            error = "Please enter a valid name.\n";
            form.pf_name.focus();

        }else if (!email.match(email_valid)){
            error = "Please enter a valid email address!";
            form.email.focus();

        } 
        
        if (error === "") {
            return true;
        }
        
        else{
            alert(error);
            return false;
        }
    }
    
    function checkPassword(pass){
        var valid = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/;
        var error = "";
        if (pass === "") {
            error = "You didn't enter a password.\n";

        } else if ((pass.length < 6) || (pass.length > 16)) {
            error = "The password should be more than 6 characters and less than 16 characters. \n";

        } else if (!(valid.test(pass))){
            error = "The password must contain one lowercase letter, one uppercase letter and one numeric digit.\n";
        
        } 
            return error;
        }
    
</script>