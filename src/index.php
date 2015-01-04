<!DOCTYPE html>
<html>
    
<head> 
    <title>Home</title>
    <link rel="stylesheet" href="static/css/bootstrap.css"  type="text/css">
    <link rel="stylesheet" href="static/css/style.css"  type="text/css">
</head>
    
<body>
    <div class="container-fluid">
        
        <div class="row">
         
            <div class="col-md-12 text-center v-center" style="background-color:#18bc9c">
            
                <h1 style="color:#FFFFFF; font-family:Papyrus">MilkyBlog</h1>
                <p class="lead text1" >Home Page</p>
            
                <br/>
              
                <form class="form-horizontal" role="form" action="view/manage_input/manage_user_info.php" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-md-4 control-label text1">Username</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" name="user_name" placeholder="Your user name">
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-md-4 control-label text1">Password</label>
                        <div class="col-md-5">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
              
                    <div class="col-md-12">
                        <input type="hidden" value="login" name="action">
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Log in</button>
                        </div>
                    </div>
                </form>
                <br> 
            
            </div>
            
            <br clear="all"> <br clear="all">
            <h3 class="register"><a href="view/register.php" style="color:black;">Don't have an account?<br>Register here!</h3>
        </div> <!-- /row -->
    
    </div> <!-- /container full -->

    <div class="container-fluid">
      
      	<br>
        <div class="row">
        <?php
        include_once("model/posts.php");
        $posts = getPosts();
        $count = 1;
        foreach ($posts as $post){
            if($count == 1){
                echo '     	
                <div class="col-md-4">
                    <div class="panel panel-info" >
                    <div class="panel-heading" ><h3><a class="text1" href="single_post.php?post='.$post['post_id'].'">'.$post['heading'].'</a></h3></div>
                    <div class="panel-body " style="border-color: #337ab7; height: 180px;">'.$post['abstract'].'
                    </div>
                    </div>
                </div>';
                $count++;
            }
            else if ($count == 2){
                echo '     	
                <div class="col-md-4">
                    <div class="panel panel-warning" >
                    <div class="panel-heading" ><h3><a class="text1" href="single_post.php?post='.$post['post_id'].'">'.$post['heading'].'</a></h3></div>
                    <div class="panel-body " style="border-color: #337ab7; height: 180px;">'.$post['abstract'].'
                    </div>
                    </div>
                </div>';
                $count++;
            }
            else if ($count == 3){
                echo '     	
                <div class="col-md-4">
                    <div class="panel panel-danger" >
                    <div class="panel-heading" ><h3><a class="text1" href="single_post.php?post='.$post['post_id'].'">'.$post['heading'].'</a></h3></div>
                    <div class="panel-body " style="border-color: #337ab7; height: 180px;">'.$post['abstract'].'
                    </div>
                    </div>
                </div>';
                $count++;
            }
            else{
                break;
            }
        }
        ?>

        </div>
        <?php require_once('view/common/footer.php') ?>
    </div>

</body>
</html>