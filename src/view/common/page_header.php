<?php $user = getUserInfo($id);?>
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
                style="max-width: 200px; max-height=200px;" class="img-circle"> </a>
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