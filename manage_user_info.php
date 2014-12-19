<?php
    include ("fns/users.php");
    $msg = "";

    if(empty($_POST['user_name'])){
    $msg .="Please enter a user name.<br/>";
    }
    if(!checkuname($_POST['user_name'])){
    $msg .="Please enter a valid user name.<br/> ";
    }
    //now we check the email address
    //check if the email address is empty
    if(empty($_POST['email'])){
    $msg .=" Please enter an email address.<br/> ";
    }
    if(empty($_POST['gender'])){
    $msg .=" Please select your gender.<br/> ";
    }
    /*Next we check if the email address has a valid format
    if(!checkEmail($_POST['email'])){
    $msg="Please enter a valid email address.<br/>";
    }
    */
    //now we check the password
    //first we check that both password fields are filled in
    if(empty($_POST['pass1'])){
    $msg .=" Please enter a password. ";
    }
    if(empty($_POST['pass2'])){
    $msg .=" Please enter a valid confirmation password. ";
    }
    if(empty($_POST['pf_name'])){
    $msg .=" Please enter a preferred name. ";
    }
    //now we check to see if the passwords match
    if($_POST['pass1'] !== $_POST['pass2']){
    $msg .=" Your password does not match the confirmation password please check and try again.";
    }
    /* SECTION 2: Data verification and insertion*/
    /*
    if(empty($msg)){ //all data test have passed
    //now we check to see if the email address entered by the user is unique
    $email=mysql_real_escape_string($_POST['email']);
    $sql = "SELECT email FROM users WHERE email = '".$email."'";
    $res = mysql_query($sql);
    if(mysql_num_rows($res) The next step is for you to activate your account. 
    To do this, simply click on the link below:\n\n";
    $emsg .="http://localhost/personalization/activate.php?u=".mysql_insert_id(). 
    "&a_code=".$actcode;
    //now send the email
    if(mail($email,$subject,$emsg)){
    $msg= "A message has been sent to your email address. Please click on the link that is provided 
    to activate your account.";
    }//mail send
    }else{
    $msg .=" The following MYSQL error occurred:".mysql_error()." <br/>";
    }
    }else{
    $msg = "Error with the email address provided ";
    }
    }//end err check
    }//end submit check
    */
    if (!empty($msg)){
        echo $msg;

    }

    else{
        $id = addUser($_POST['user_name'], $_POST['email'], $_POST['gender'], $_POST['pass1'], $_POST['pf_name']);
    session_start();
    $_SESSION['user_name'] = $_POST['user_name'];
    
    $_SESSION['uid'] = $id;
    }
    ;
    header('Location: all_posts.php?uid='.$id);
    ?> 