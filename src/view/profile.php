<html>
    <head>
        <title>Account Settings</title>
        <?php require_once('common/header.php') ?>
        <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
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
                        <div class="wrapper col-lg-offset-4">
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="manage_input/manage_user_info.php" runat="server">
                                <img class="img-thumbnail" style="max-height: 300px; max-width: 300px" id="preview" src="
                                <?php
                                if (empty($userInfo['img'])){
                                    echo "../static/uploads/default.jpg";
                                }
                                else{
                                    echo "../static/uploads/".$userInfo['img'];
                                }?>
                                                                                                                         "/>
                                <input style="padding:20px" type="file" name="fileToUpload" id="fileToUpload" onchange="readURL(this);">
                                
                                <input type="hidden" value="profile" name="action"></input>
                                <br>
                                <button type="submit" class="btn btn-primary" href="all_posts.php?uid='.$_GET['id']">Upload Image</button>
                            </form>
                         </div>   
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
