<html>
    <head>
        <title>HL 2014-12-16</title>
         <?php require_once('header.php') ?>
    </head>
    <body>
        <?php require_once("nav2.php")?>
        <div class="container-full" style="background-image:url('img/background3.jpg'); background-size: 100% 100%;">
            <br><br><br>
            
            <div class="col-md-8 col-md-offset-1"><h2 style="font-family:Cursive">HL's Blog</h2></div>
            <?php require_once("nav.php") ?>
            <br><br>

            <div class="row">
                 <?php require_once('left_panel.php') ?>
                <div class="col-md-9">
                    <div class="panel-default post-panel">
                        <br><br>
                        
                        <form class="form-horizontal" role="form" >
                            <div class="form-group-lg" >
                            <label for="" class="col-md-2 control-label label-lg">HEADING</label>
                            <div class="col-md-10">
                            <input type="heading" class="form-control" id="" placeholder="Enter your heading here">
                            </div>
                            </div>
                            <br>
                            
                        </form>
                        
                        <br><br>
                        <div class="col-md-10 col-md-offset-2">
                        <div class="btn-group" role="group" aria-label="Align">
                            <button type="button" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-align-left" aria-hidden="true"></span></button>
                            <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-center" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-right" aria-hidden="true"></span></button>
                        </div>
                            </div>
                        
                        <br><br><br>
                        
                        
                        <form class="form-horizontal" role="form">
                            <div class="form-group-lg" >
                            <label for="" class="col-md-2 control-label label-lg">ABSTRACT</label>
                            </div>
                            <div class="col-md-10">
                            <textarea class="form-control" rows="10"></textarea>
                            </div>
                            
                            <br>
                            
                        </form>
                    
                        <form class="form-horizontal" role="form">
                            <div class="form-group-lg" >
                            <label for="" class="col-md-2 control-label label-lg">CONTENT</label>
                            </div>
                            <div class="col-md-10">
                            <textarea class="form-control" rows="20"></textarea>
                            </div>
                            
                            <br>
                            
                        </form>
                       
                    </div>
                </div>
            </div>
            
            <?php require_once('footer.php') ?>
        </div>

    </body>
</html>