<!DOCTYPE html>
<html>
    
    <head>
        <title>MyBlog</title> 
         <?php require_once('common/header.php') ?>
    </head>
    
    <body>
        <?php require_once("common/nav2.php") ?>
        <div class="container-fluid" style="background-image:url('static/img/background3.jpg'); background-size: 100% 100%;">
            <br><br><br>
            <div class="row">
                <div class="col-md-8 col-md-offset-1"><h2 style="font-family:Cursive">HL's Blog</h2></div>
            </div>
            <?php require_once("common/nav.php") ?>
            <br><br>

            <div class="row">
                 <?php require_once('common/left_panel.php') ?>
                
                <div class="col-md-9">
                    <div class="circle text-center">
                        <h4 class="circleH"><a href="single_post.php">FirstPostTitle</a></h4>
                        <small>date:2014/12/15</small>
                        <p class="circleText">saldskjfas  ksdj jksl dk jslfk jsdkfjwl ksj j j ksdfja</p>
                    </div>
                    <div class="circle text-center">
                        <h4 class="circleH"><a href="single_post.php">SecondPostTitle</a></h4>
                        <small>date:2014/12/15</small>
                        <p class="circleText">saldskjfas  ksdj jksl dk jslfk jsdkfjwl ksj j j ksdfja</p>
                    </div>   
                    <div class="circle">
                    </div> 
                    <div class="circle">
                    </div> 
                    <div class="circle">
                    </div> 
                    <div class="circle">
                    </div> 
                    
                    <?php require_once('common/pagination.php') ?>
                </div>
                

            </div>
            <?php require_once('common/footer.php') ?>
        </div>
         
    </body>
</html>