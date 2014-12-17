<html>
<?php include('config/config.php') ?>
<?php include('config/global.php') ?>
<?php include('model/posts.php') ?>
 <?php   
    if ($id = $_GET['post']){
    deletePost($id);
}
    else if ($_POST['is_edit']){
    updatePost($_POST['id'], $_POST['heading'], $_POST['abstract'], $_POST['content']);
}
else{
    createNewPost($_POST['heading'], $_POST['abstract'], $_POST['content']);  
}
header( "Location: all_posts.php" );
?>
</html>