<html>
    <head>
        <title>All Posts</title>
        <?php require_once('common/header.php') ?>
        
    </head>
    
    <body>
        <?php require_once("common/new_nav.php");
            require_once("common/include.php");
            session_start();
        ?>
        <div class="container-fluid">
            <?php require_once("common/page_header.php");?>
        <div class="container-fluid">
        <div class="row">
            <?php 
            if (isset($_GET['uid'])){
                $id = $_GET['uid'];
            }else{
                $id = $_SESSION['uid'];
            }
            require_once("common/left_panel.php");
            ?>

            <div class="col-lg-9">
                <?php $posts = getAllPosts($id); 
                if ($posts){
                      foreach ($posts as $post) {
                      echo '<div class="MyPostPanel">
                            <h3><a href="single_post.php?post='.$post['post_id'].'">' .$post['heading']. '</a></h3>
                            <small>Date:' . $post['date'] .  '</small>
                            <p>' . $post['abstract'] . '</p>
                            </div>';
                      }
                }
                ?> 
            </div>
            </div>
        </div>
        
        <?php require_once('common/footer.php') ?>

    </body>
</html>