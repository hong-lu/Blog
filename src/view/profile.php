<html>
    <head>
        <title>Account Settings</title>
        <?php require_once('common/header.php') ?>
    </head>
    
    <body>
        <?php 
        require_once("common/new_nav.php");
        require_once("common/include.php");
        session_start();
        $userInfo = getUserInfo($_SESSION['uid']);
        ?>

        <div class="container-fluid">
            <div class="bs-docs-section">
                
                <div class="col-lg-12">
                    <br><br>
                    <div class="page-header">
                        <h2 id="forms" style="text-align: center">Upload your preferred profile picture </h2> 
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2" >
                        <div class="well bs-component">
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="manage_input/manage_user_info.php">
                                <input style="padding:20px" type="file" name="fileToUpload" id="fileToUpload">
                                <input type="hidden" value="profile" name="action"></input>
                                <br>
                                <button type="submit" style="margin-left:45%;" class="btn btn-primary" href="all_posts.php?uid='.$_GET['id']">Upload Image</button>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
