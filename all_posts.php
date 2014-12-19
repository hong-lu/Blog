<?php include('config/config.php') ?>
<?php include('config/global.php') ?>
<?php include('fns/posts.php') ?>

<!DOCTYPE html>
<html>
    
    <head>
        <title><?php echo SITE_TITLE ?></title>
        <?php require_once('common/header.php') ?>
    </head>
    
    <body>
        <?php require_once("common/nav2.php") ?>
        <div class="container-fluid backgroundimg">
            <br><br>
            <div class="row">
                <div class="col-md-8 col-md-offset-1"><h2 style="font-family:Cursive">HL's Blog</h2></div>
            </div>
            <?php require_once("common/nav.php") ?>
            <br><br>

            <div class="row">
                <?php require_once('common/left_panel.php') ?>
                
                <div class="col-md-9">
                    <?php $posts = getAllPosts(); 
                    foreach ($posts as $post) {
                        echo '<div class="circle text-center">
                                <h4 class="circleH"><a class="text-navy" href="/blog/single_post.php?post='.$post['post_id'].'">' .$post['heading']. '</a></h4>
                                    <small>Date:' . $post['date'] .  '</small>
                                <p class="circleText">' . $post['abstract'] . '</p>
                                
                            </div>';
                    }
                    ?>                    
                    
                </div>
                

            </div>
            <?php require_once('common/footer.php') ?>
        </div>
         
    </body>
</html>