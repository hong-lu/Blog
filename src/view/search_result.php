<html>
    <head>
        <title>All Posts</title>
        <?php require_once('common/header.php') ?>
        
    </head>
    
    <body>
        <?php 
        require_once("common/new_nav.php");
        require_once("common/include.php");
        $posts = searchPost($_POST['keyword']); 
        if (empty($posts)){
            echo '<script> alert("No result match!"); window.location = "all_posts.php?uid='.$uid.'"; </script>';
        }
        else{
            echo '<div class="jumbotron" style="margin-top: 40px; padding: 40px">';
            foreach ($posts as $post) {
                echo '<div class="MyPostPanel">
                    <h3><a href="single_post.php?post='.$post['post_id'].'">' .$post['heading']. '</a></h3>
                    <small>Date:' . $post['date'] .  '</small>
                    <p>' . $post['abstract'] . '</p>
                    </div>';
            }
            echo '<div>';
        }
        ?>

    </body>
</html>