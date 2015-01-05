<?php
include_once("../../model/posts.php");
session_start();
if (isset($_POST['cid'])){
    deleteComment($_POST['cid']);
}
else{
    createComment($_POST['uid'], $_POST['pid'], $_POST['comment']);
}
header('Location:../single_post.php?post='.$_POST['pid']);
?>