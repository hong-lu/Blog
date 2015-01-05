 
    function validateSecurityForm(form){

        var pass1 = form.pass1.value;
        var pass2 = form.pass2.value;
        var warning = "#e43725";

        if (checkPassword(pass1, pass2) != ""){
            form.pass1.focus();
            error = checkPassword(pass1, pass2);
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
    
    function validateRegistrationForm(form){
        var pass1 = form.pass1.value;
        var pass2 = form.pass2.value;
        var uname = form.user_name.value;
        var pf_name = form.pf_name.value;
        var email = form.email.value;
        var uname_valid = /^[\w ]+$/;
        var email_valid = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var warning = "#e43725";
        var error = "";

        if (checkPassword(pass1, pass2) !== ""){
            form.pass1.focus();
            error = checkPassword(pass1, pass2);
        
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
    
    function checkPassword(pass1, pass2){
        var valid = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/;
        var error = "";
        if (pass1 === "") {
            error = "You didn't enter a password.\n";

        } else if ((pass1.length < 6) || (pass1.length > 16)) {
            error = "The password should be more than 6 characters and less than 16 characters. \n";

        } else if (!(valid.test(pass1))){
            error = "The password must contain one lowercase letter, one uppercase letter and one numeric digit.\n";
        
        } else if ( pass1 !== pass2){
            error = "Passwords mismatch!\n";
        }
        return error;
    }
    
    function confirmDelete(){
        var id = confirm("Are you sure to delete the post?");
        return id;
    }
    