<html>
    <head>
        <title>Register</title>
        <?php require_once('common/header.php') ?>
    </head>
    
    <body>
        <?php 
        require_once("common/new_nav.php");
        require_once("common/include.php");
        include_once("../helper/helper.php");
        ?>

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
                            <form class="form-horizontal" method="post" action="manage_input/create_user.php" onsubmit="return validateRegistrationForm(this);">
                                <fieldset>
                                    <legend style="text-align: center">Please take note that all fields are mandatory</legend>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" required>User Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" id="user_name" class="form-control" name="user_name" placeholder="User Name">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-lg-3 control-label">Email</label>
                                        <div class="col-lg-9">
                                            <input id="email" type="text" class="form-control" name="email" placeholder="Your email address">
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Password</label>
                                        <div class="col-lg-9">
                                            <input id="pass1" type="password" name="pass1" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-offset-3 col-lg-9">
                                        <div class="bs-component">
                                            <div class="alert alert-dismissable alert-info">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <strong>Enter a password between 8 to 15 characters which contain at least one lowercase letter, one uppercase letter and one numeric digit.</strong>
                                            </div>
                                        </div>
                                    </div>                                  
                                  
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Confirm Password</label>
                                        <div class="col-lg-9">
                                        <input id="pass2" type="password" name="pass2" class="form-control" placeholder="Please enter your password again" onchange="javascript: checkPassSame();">
                                        </div>
                                    </div>
                                  
                                    
                                    <div class="form-group">
                                        <label for="inputPreferredName" class="col-lg-3 control-label">Preferred Name</label>
                                        <div class="col-lg-9">
                                        <input id="pf_name" type="text" class="form-control" name="pf_name" placeholder="Name shown to other users" >
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Gender</label>
                                        <div class="col-lg-9">
                                            <div class="radio">
                                                <label>
                                                    <input id="gender" type="radio" name="gender" value="F" checked="">Female
                                                </label>
                                            </div>
                                        <div class="radio">
                                        <label>
                                            <input id="gender" type="radio" name="gender" value="M">Male
                                        </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input id="gender" type="radio" name="gender" value="I would rather not say">I'd rather not say.
                                            </label>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-12">
                                        <button type="submit" style="margin-left:45%;" class="btn btn-primary" >Submit</button>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>   
                        </div>
                    </div>
                </div>

            </div>
            <?php require_once('common/footer.php') ?>
        </div>
    </body>
</html>