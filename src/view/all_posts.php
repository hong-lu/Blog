<html>
    <head>
        <title>All Posts</title>
        <?php require_once('common/header.php') ?>
        
    </head>
    
    <body>
        <?php 
        require_once("common/new_nav.php");
        require_once("common/include.php");
        if (empty($uid)){
            $posts = getPosts();
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
        else{
            echo '<div class="container-fluid">';
            require_once("common/page_header.php");
            echo'
                </div>
            <div class="container-fluid">
                <div class="row">';
                require_once("common/left_panel.php"); 
                echo'<div class="col-lg-9">';
                $posts = getAllPosts($uid); 
                    if ($posts){
                        foreach ($posts as $post) {
                        echo '<div class="MyPostPanel">
                            <h3><a href="single_post.php?post='.$post['post_id'].'">' .$post['heading']. '</a></h3>
                            <small>Date:' . $post['date'] .  '</small>
                            <p>' . $post['abstract'] . '</p>
                            </div>';
                        }
                    }
            echo '
                    </div>
                </div>
            </div>';
        }
        ?> 
            <?php require_once('common/footer.php') ?>
    </body>
</html>