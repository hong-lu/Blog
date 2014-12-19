<?php include('config/config.php') ?>
<?php include('config/global.php') ?>
<?php include('model/posts.php') ?>
<html>
    <head>
        <title>Register</title>
        <?php require_once('common/header.php') ?>
    </head>
    
    <body>
        <?php require_once("common/new_nav.php")?>
        <div class="container-fluid">
            <div class="bs-docs-section">
                <div class="row">
                  <div class="col-lg-12">
                    <br><br>
                    <div class="page-header">
                      <h2 id="forms" style="text-align: center">Create Your New account Today!</h2>
                    </div>
                  </div>
                </div>
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2" >
        <div class="well bs-component">
          <form class="form-horizontal" method="post" action="manage_user_info.php">
            <fieldset>
              <legend style="text-align: center">Please take note that all fields are mandatory</legend>
              <div class="form-group">
                <label for="inputUserName" class="col-lg-3 control-label">User Name</label>
                <div class="col-lg-9">
                  <input type="text" class="form-control" name="user_name" placeholder="User Name">
                </div>
              </div>
              <div class="col-lg-offset-3 col-lg-9">
                <div class="bs-component">
                  <div class="alert alert-dismissable alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                   <strong>Your user name should consists of alphabets and numbers only!</strong> This will be used for future log in.
                  </div>
                </div>
              </div>    
                
              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">Email</label>
                <div class="col-lg-9">
                  <input type="text" class="form-control" name="email" placeholder="Your email address">
                </div>
              </div>
                
              <div class="form-group">
                <label for="inputPassword" class="col-lg-3 control-label">Password</label>
                <div class="col-lg-9">
                  <input type="password" name="pass1" class="form-control" id="inputPassword" placeholder="Your password should consists of both alphabets and numbers!">
                </div>
              </div>
            
              
              <div class="form-group">
                <label for="inputPassword" class="col-lg-3 control-label">Confirm Password</label>
                <div class="col-lg-9">
                  <input type="password" name="pass2" class="form-control" id="inputPassword" onsumbit="return myFunction()" placeholder="Please enter your password again">
                </div>
              </div>
              
                
              <div class="form-group">
                <label for="inputPreferredName" class="col-lg-3 control-label">Preferred Name</label>
                <div class="col-lg-9">
                  <input type="text" class="form-control" name="pf_name" placeholder="Name shown to other users" value="">
                </div>
              </div>
                
              <div class="form-group">
                <label class="col-lg-3 control-label">Gender</label>
                <div class="col-lg-9">
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" value="F" checked="">Female
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" value="M">Male
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" value="I'd rather not say">I'd rather not say.
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-lg-12">
                  <button type="submit" style="margin-left:45%;" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
            
            
<script>
    function myFunction() {
        var pass1 = document.getElementById("pass1").value;
        var pass2 = document.getElementById("pass2").value;
        if (pass1 != pass2) {
            //alert("Passwords Do not match");
            document.getElementById("pass1").style.borderColor = "#E34234";
            document.getElementById("pass2").style.borderColor = "#E34234";
        }
        else {
            alert("Passwords Match!!!");
        }
    }
</script>
            
        </div>
      </div>

    </div>
  </div>
        </div>
        
    </body>
</html>