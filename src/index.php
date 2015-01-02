<!DOCTYPE html>
<html>
    
<head> 
    <title>Home</title>
    <link rel="stylesheet" href="static/css/bootstrap.css"  type="text/css">
    <link rel="stylesheet" href="static/css/style.css"  type="text/css">
</head>
    
<body style="background-color: #FFF;">

    <div class="container-fluid">
        
      <div class="row">
       
        <div class="col-lg-12 text-center v-center" style="background-color:#18bc9c">
          
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

          <div class="form-group">
            <div class="col-md-offset-1 col-md-10">
              <div class="checkbox">
                <label class="text1">
                  <input type="checkbox"> Remember me
                </label>
              </div>
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
          <h3 class="register"><a href="register.php" style="color:black;">Don't have an account?<br>Register here!</h3>
      </div> <!-- /row -->
  
  	  <div class="row">
       
        <div class="col-lg-12 text-center v-center" style="font-size:39pt;">
          <a href="#"><i class="icon-google-plus"></i></a> <a href="#"><i class="icon-facebook"></i></a>  <a href="#"><i class="icon-twitter"></i></a> <a href="#"><i class="icon-github"></i></a> <a href="#"><i class="icon-pinterest"></i></a>
        </div>
      
      </div>

</div> <!-- /container full -->

<div class="container">
  
  	<hr>
  
  	<div class="row">
        <div class="col-md-4">
          <div class="panel panel-info" >
            <div class="panel-heading" ><h3 class="text1">Hello.</h3></div>
            <div class="panel-body " style="border-color: #337ab7;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
            Aliquam in felis sit amet augue.
            </div>
          </div>
        </div>
      	<div class="col-md-4">
        	<div class="panel panel-warning">
            <div class="panel-heading"><h3 class="text1">Hello.</h3></div>
            <div class="panel-body" style="border-color: #fd8c9e;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
            Aliquam in felis sit amet augue.
            </div>
          </div>
        </div>
      	<div class="col-md-4">
        	<div class="panel panel-danger">
            <div class="panel-heading"><h3 class="text1">Hello.</h3></div>
            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
            Aliquam in felis sit amet augue.
            </div>
          </div>
        </div>
    </div>
    </div>

    <?php require_once('view/common/footer.php') ?>
    
</body>
</html>