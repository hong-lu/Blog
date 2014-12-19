<?php include('config/config.php') ?>
<?php include('config/global.php') ?>
<?php include('fns/posts.php') ?>
<html>
    <head>
        <title><?php echo SITE_TITLE ?></title>
        <?php require_once('common/header.php') ?>
    </head>
    <body>
        <?php require_once("common/nav2.php")?>
        <div class="container-fluid backgroundimg" >
            <br><br><br>
            
            <div class="col-md-8 col-md-offset-1"><h2 style="font-family:Cursive">HL's Blog</h2></div>
            <?php require_once("common/nav.php") ?>
            <br><br>
            
             <?php 
                if (!(isset($_GET['post']))){
                    header( "Location: all_posts.php" );
                }
                    $id = $_GET['post'];
            $curr_post = getSinglePost($id);
            ?>
            
            <div class="row">
            <?php require_once('common/left_panel.php');?>
            <div class="col-md-9">
                    <div class="panel-default post-panel">
                        <h3 class="post-heading"> <?php echo $curr_post['heading']; ?></h3>
                        <br>
                        <p class="lead"> <?php echo $curr_post['abstract']; ?></p>
            <p> <?php echo $curr_post['content']; ?> </p>
                        
                    </div>
                <div class="col-md-12 wrapper" style="text-align:center">
                    <a class="btn-lg btn-primary" style="text-decoration:none;" href="new_post.php?post=<?php echo $_GET['post']?>">Edit</a>
                    <a class="btn-lg btn-primary" style="text-decoration:none;" href="manage_data.php?post=<?php echo $_GET['post']?>">Delete</a>
                    
                </div>
                </div>
            </div>
            
            <?php require_once('common/footer.php') ?>
        </div>

    </body>
</html>