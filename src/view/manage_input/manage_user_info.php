<?php
include_once("../../model/users.php");
session_start();
if ($_POST['action'] == "login"){
    if($uid = loginCheck($_POST['user_name'], $_POST['password'])){
        header("Location: ../all_posts.php?uid=".$uid);
    }
    else{
        echo "Wrong Input!";
    }
}
else if ($_POST['action'] == "change"){
    changeUserInfo($_POST['email'], $_POST['gender'], $_POST['pass1'], $_POST['pf_name']);
    header("Location: ../all_posts.php?uid=".$_SESSION['uid']);
}

?>