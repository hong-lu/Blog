<!DOCTYPE html>
<html>
    
    <head>
        <title>MyBlog</title> 
         <?php require_once('header.php') ?>
    </head>
    
    <body>
        <?php require_once("nav2.php") ?>
        <div class="container-full" style="background-image:url('img/background3.jpg'); background-size: 100% 100%;">
            <br><br><br>
            
            <div class="col-md-8 col-md-offset-1"><h2 style="font-family:Cursive">HL's Blog</h2></div>
            <?php require_once("nav.php") ?>
            <br><br>

            <div class="row">
                 <?php require_once('left_panel.php') ?>
                
                <div class="col-md-9">
                    <div class="circle">
                        <h4 class="circleH">FirstPostTitle <br><small>date:2014/12/15</small></h3>
                        <p class="circleText">saldskjfas  ksdj jksl dk jslfk jsdkfjwl ksj j j ksdfja</p>
                    </div>
                    <div class="circle" style="border-color:red">
                        <h4 class="circleH">SecondPostTitle <br><small>date:2014/12/15</small></h3>
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
                    
                    <?php require_once('pagination.php')?>
                </div>
                

            </div>
            <?php require_once('footer.php') ?>
        </div>
         
    </body>
</html>