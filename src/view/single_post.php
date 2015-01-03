<html>
    <head>
        <title> Hl's Blog </title>
        <?php require_once('common/header.php') ?>
    </head>
    <body>
        <?php   
            session_start();
            require_once("common/new_nav.php");
            require_once("common/include.php");
             if (isset($_GET['uid'])){
                $id = $_GET['uid'];
            }else{
                $id = $_SESSION['uid'];
            }               
        ?>
        <div class="container-fluid">

            <?php require_once("common/page_header.php");
            ?>

             <?php 
                if (!(isset($_GET['post']))){
                    header( "Location: all_posts.php" );
                }
                $pid = $_GET['post'];
                $curr_post = getSinglePost($pid);
            ?>
            
            <div class="row">
            <?php require_once('common/left_panel.php');?>
            
            <div class="col-md-9">
                
                <div class="jumbotron">
                    <h2 class="post-heading"> <?php echo $curr_post['heading']; ?></h3>
                    <p style="text-align:center"><small><?php echo $curr_post['date'];?></small></p>
                    <br>
                    <p class="lead"> <?php echo $curr_post['abstract']; ?></p>
                    <p> <?php echo $curr_post['content']; ?> </p>

                </div>
                
                <div class="container-fluid" style="margin-bottom: 30px;">
                    <div class="col-md-12" style="text-align:center;">
                        <a class="btn btn-success" style="text-decoration:none;" href="new_post.php?post=<?php echo $_GET['post']?>">Edit</a>
                        <a class="btn btn-danger" style="text-decoration:none;" href="manage_post.php?post=<?php echo $_GET['post']?>">Delete</a>                   
                    </div>
                </div>
                
                <div class="jumbotron">
                    <div class="MyCommentHeading"><h3>Comments</h3></div>
                    <?php $comments = getComments($pid);
                                foreach ($comments as $cmt){
                                    $array = getUserInfo($cmt['uid']);
                                    $pfname = $array['pf_name'];
                                    echo 
                                    '<div class="MyCommentPanel">
                                        <span class="glyphicon glyphicon-user" aria-hidden=true> '.$pfname.'</span>
                                        <br>
                                        <div style="margin:0px 0px 0px 40px">
                                            <small>Date: '.$cmt['date'].'</small><br>
                                            <p style="font-size:20px">'.$cmt['content'].'</p>
                                        </div>
                                    </div>';}
                    ?>
                    
                    <form role="form" action="manage_input/manage_comment.php" method="post">
                        <br><br>
                        <textarea class="form-control" rows="10" name="comment" placeholder="Your Comment Here..."></textarea>
                        <br>
                        <input type=hidden name="uid" <?php echo "value=".$_SESSION['uid'];?> >
                        <input type=hidden name="pid" <?php echo "value=".$pid;?> >
                        <div class="wrapper" style="text-align:center">
                            <button type="submit" class="btn btn-primary" >Submit</button>
                        </div>
                    </form>
                </div>
                
                
            </div>
            </div>
            
            <?php require_once('common/footer.php') ?>
        </div>

    </body>
</html>