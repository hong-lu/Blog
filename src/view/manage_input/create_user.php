<?php
include_once('../../model/users.php');

if(checkUname($_POST['user_name'])){
    header('Location: alert.php');
}

else{
    $id = addUser($_POST['user_name'], $_POST['email'], $_POST['gender'], $_POST['pass1'], $_POST['pf_name']);
    session_start();
    $_SESSION['user_name'] = $_POST['user_name'];
    $_SESSION['uid'] = $id;
}

//header('Location:../all_posts.php?uid='.$id);
?> 