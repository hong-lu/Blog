<?php include('config/config.php') ?>
<?php include('config/global.php') ?>

<html>
    <head>
        <title><?php echo SITE_TITLE ?></title>
        <?php require_once('common/header.php') ?>
    </head>
    <body>
        <?php require_once("common/nav2.php")?>
        <div class="container-fluid" style="background-image:url('img/background3.jpg'); background-size: 100% 100%;">
            <br><br><br>
            
            <div class="col-md-8 col-md-offset-1"><h2 style="font-family:Cursive">HL's Blog</h2></div>
            <?php require_once("common/nav.php") ?>
            <br><br>

            <div class="row">
                 <?php require_once('common/left_panel.php') ?>
                <div class="col-md-9">
                    <div class="panel-default post-panel">
                        <h3 class="post-heading">My Fisrt Day</h3>
                        <br>
                        <p>kasdljf kkkkkkkk jjjjjjjjjjj jjjjjjjjakkkk<br><br><br></p>
                        
                    </div>
                </div>
            </div>
            
            <?php require_once('common/footer.php') ?>
        </div>

    </body>
</html>