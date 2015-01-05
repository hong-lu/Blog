<?php $user = getUserInfo($uid);?>
<div class="page-header" id="banner">
    <div class="row">
        <div class="jumbotron">
            <div class="container">
                <div class="col-lg-3">
                <img src="
                <?php 
                if(empty($user['img'])){
                    echo "../static/uploads/default.jpg";
                }
                else{
                    echo "../static/uploads/".$user['img'];
                }
                ?>"  
                class="img-circle profile-img"> </a>
                </div>
                <div class="col-lg-9">
                    <h1><?php echo $user['pf_name']." 's Blog"; ?> </h1>
                    <p class="lead">
                        <?php 
                        if(empty($user['intro'])){
                            echo "Welcome to my blog!";
                        }
                        else{
                            echo $user['intro'];
                        }
                        ?>
                    </p>
              </div>
          </div>
        </div>
    </div>
</div>