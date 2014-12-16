<!DOCTYPE html>
<html>
    
<head>
    
    <title>Login</title> 
     <?php require_once('header.php') ?>
</head>
    
<body style="background-color: #FFF;">

    <div class="container-full">
        
      <div class="row">
       
        <div class="col-lg-12 text-center v-center" style="background-color:#000066">
          
          <h1 style="color:#FFFFFF; font-family:Papyrus">MilkyBlog</h1>
          <p class="lead text1" >Home Page</p>
          
          <br/>
            
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="inputEmail3" class="col-md-4 control-label text1">Email</label>
            <div class="col-md-5">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email Address">
            </div>
          </div>

          <div class="form-group">
            <label for="inputPassword3" class="col-md-4 control-label text1">Password</label>
            <div class="col-md-5">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
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

          <div class="form-group">
            <div class="col-md-offset-1 col-md-10">
              <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
            </div>
          </div>
        </form>
         <br> 
          
        </div>
        
      </div> <!-- /row -->
  
  	  <div class="row">
       
        <div class="col-lg-12 text-center v-center" style="font-size:39pt;">
          <a href="#"><i class="icon-google-plus"></i></a> <a href="#"><i class="icon-facebook"></i></a>  <a href="#"><i class="icon-twitter"></i></a> <a href="#"><i class="icon-github"></i></a> <a href="#"><i class="icon-pinterest"></i></a>
        </div>
      
      </div>
  
  	<br><br><br>

</div> <!-- /container full -->

<div class="container">
  
  	<hr>
  
  	<div class="row">
        <div class="col-md-4">
          <div class="panel panel-default" >
            <div class="panel-heading red" ><h3 class="text1">Hello.</h3></div>
            <div class="panel-body " style="border-color: #337ab7;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
            Aliquam in felis sit amet augue.
            </div>
          </div>
        </div>
      	<div class="col-md-4">
        	<div class="panel panel-default">
            <div class="panel-heading navyblue"><h3 class="text1">Hello.</h3></div>
            <div class="panel-body" style="border-color: #fd8c9e;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
            Aliquam in felis sit amet augue.
            </div>
          </div>
        </div>
      	<div class="col-md-4">
        	<div class="panel panel-success">
            <div class="panel-heading green"><h3 class="text1">Hello.</h3></div>
            <div class="panel-body"style="border-color: #337ab7;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
            Aliquam in felis sit amet augue.
            </div>
          </div>
        </div>
    </div>
    </div>

    <?php require_once('footer.php') ?>
    
    <script src="http://code.jquery.com/jquery-1.10.1.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>