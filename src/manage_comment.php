<?php
include("fns/posts.php");

createComment($_POST['uid'], $_POST['pid'], $_POST['comment']);

header('Location: single_post.php?post='.$_POST['pid']);
?>