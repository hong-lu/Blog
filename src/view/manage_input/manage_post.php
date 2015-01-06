<?php 
include_once('../../model/posts.php');
session_start();
if(!isset($_SESSION['uid'])){
    echo '<script>alert("You have not logged in yet!"); 
    window.location = "../index.php" ; </script>'; 
}
if (isset($_GET['post']) && ($id = $_GET['post']) ){
    $curr_post = getSinglePost($id);
    if($curr_post['uid'] == $_SESSION['uid']){
        deletePost($id);
    }
}
else if ($_POST['is_edit']){
    $curr_post = getSinglePost($_POST['id']);
    if($curr_post['uid'] == $_SESSION['uid']){
        updatePost($_POST['id'], $_POST['heading'], $_POST['abstract'], $_POST['content']);
    }
}

else{
    createNewPost($_POST['heading'], $_POST['abstract'], $_POST['content'], $_SESSION['uid']);  
}

header( "Location: ../all_posts.php?uid=". $_SESSION['uid']);
?>