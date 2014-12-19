<html>
    <head>
        <title> Hl's Blog </title>
        <?php require_once('common/header.php') ?>
    </head>
    <body>
        <?php require_once("common/new_nav.php");
              require_once("common/include.php")
        ?>
        <div class="container-fluid">
            <?php require_once("common/page_header.php");?>
            
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
                    <div class="jumbotron">
                        <h3 class="post-heading"> <?php echo $curr_post['heading']; ?></h3>
                        <p style="text-align:center"><small><?php echo $curr_post['date'];?></small></p>
                        <br>
                        <p class="lead"> <?php echo $curr_post['abstract']; ?></p>
                        <p> <?php echo $curr_post['content']; ?> </p>
                        
                    </div>
                <div class="col-md-12 wrapper" style="text-align:center">
                    <a class="btn btn-success" style="text-decoration:none;" href="new_post.php?post=<?php echo $_GET['post']?>">Edit</a>
                    <a class="btn btn-danger" style="text-decoration:none;" href="manage_post.php?post=<?php echo $_GET['post']?>">Delete</a>
                    
                </div>
                </div>
            </div>
            
            <?php require_once('common/footer.php') ?>
        </div>

    </body>
</html>