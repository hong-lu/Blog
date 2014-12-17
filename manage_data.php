<html>
<?php include('config/config.php') ?>
<?php include('config/global.php') ?>
<?php include('model/posts.php') ?>
 <?php   
    
    createNewPost($_POST['heading'], $_POST['abstract'], $_POST['content']);
?>
</html>