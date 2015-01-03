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
else if ($_POST['action'] == "profile"){
    changeUserInfo($_POST['pf_name'], $_POST['age'], $_POST['address'], $_POST['gender'],  $_POST['intro']);
    header("Location: ../all_posts.php?uid=".$_SESSION['uid']);
}
else if ($_POST['action'] == "security"){
    changeSecuritySetting($_POST['email'], $_POST['pass1']);
    header("Location: ../all_posts.php?uid=".$_SESSION['uid']);
}

?>