<?php
include ("../../fns/users.php");
if ($_POST['action'] == "login"){
    if($uid = loginCheck($_POST['user_name'], $_POST['password'])){
        header("Location: ../all_posts.php?uid=".$uid);
    }
    else{
        echo "Wrong Input!";
    }
}
elif ($_POST['action'] == "change"){
}

?>