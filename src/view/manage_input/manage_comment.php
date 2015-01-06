<?php
include_once("../../model/posts.php");
session_start();
if(!isset($_SESSION['uid'])){
    echo '<script>alert("You have not logged in yet!"); 
    window.location = "../single_post.php?post='.$_POST['pid'].'" ; </script>'; 
}
if (isset($_POST['cid'])){
    $currCmt = getSingleCmt ($_POST['cid']);
    if ($currCmt['uid'] == $_SESSION['uid']){
        deleteComment($_POST['cid']);
    }
}
else{
    createComment($_POST['uid'], $_POST['pid'], $_POST['comment']);
}

header('Location:../single_post.php?post='.$_POST['pid']);
?>