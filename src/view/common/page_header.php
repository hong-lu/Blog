<div class="page-header" id="banner">
    <div class="row">
      <div class="jumbotron">
          <div class="container">
              <div class="col-lg-3">
              <img src="http://www.soideas.cn/uploads/allimg/110819/09115512P-11.jpg" alt="..." class="img-circle"> </a>
               </div>
              <div class="col-lg-9">
                    <h1><?php $user = getUserInfo($id);
                            echo $user['pf_name']." 's Blog"; ?> </h1>
                    <p class="lead">
                        <?php if(empty($user['intro'])){
                                echo "Welcome to my blog!";
                            }else{
                                echo $user['intro'];
                            }
                        ?>
                    </p>
              </div>
          </div>
      </div>
    </div>
</div>