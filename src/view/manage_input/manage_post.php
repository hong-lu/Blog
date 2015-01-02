<html>
<?php session_start();?>
 <?php 
    include_once('../../model/posts.php');
    
    session_start();
    if (isset($_GET['post']) && ($id = $_GET['post']) ){
    deletePost($id);
}
    else if ($_POST['is_edit']){
    updatePost($_POST['id'], $_POST['heading'], $_POST['abstract'], $_POST['content']);
}
    
    else{
        createNewPost($_POST['heading'], $_POST['abstract'], $_POST['content'], $_SESSION['uid']);  
    }

   header( "Location: ../all_posts.php?uid=". $_SESSION['uid']);
?>
</html>