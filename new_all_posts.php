<?php include('config/config.php') ?>
<?php include('config/global.php') ?>
<?php include('model/posts.php') ?>
<html>
    <head>
        <title>All Posts</title>
        <?php require_once('common/header.php') ?>
    </head>
    
    <body>
        <?php require_once("common/new_nav.php")?>
        <div class="container-fluid">
          <div class="page-header" id="banner">
            <div class="row">
              <div class="jumbotron">
                  <div class="container">
                      <div class="col-lg-3">
                      <img src="http://www.soideas.cn/uploads/allimg/110819/09115512P-11.jpg" alt="..." class="img-circle"> </a>
                       </div>
                      <div class="col-lg-9">
                            <h1>HL's Blog</h1>
                            <p class="lead">This is a simple introduction.</p>
                      </div>
                  </div>
              </div>
              </div>
            </div>
        
        <div class="row">
            <div class="col-lg-3">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-user" style="margin-right: 10px;" aria-hidden="true"></span>
                        My Personal Infomation
                    </h3>
                  </div>
                  <div class="panel-body">
                    <p>Address: <br>
                       blahblah</p>
                  </div>
                </div>
                
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-folder-open" style="margin-right: 10px;" aria-hidden="true"></span>
                        Archive 
                    </h3>
                  </div>
                  <div class="panel-body">
                    2014 <br> 2015 <br> <br> <br>
                  </div>
                </div>
            </div>
            
            <div class="col-lg-9">
                <?php $posts = getAllPosts(); 
                      foreach ($posts as $post) {
                      echo '<div class="MyPostPanel">
                            <h3><a href="/blog/single_post.php?post='.$post['post_id'].'">' .$post['heading']. '</a></h3>
                            <small>Date:' . $post['date'] .  '</small>
                            <p>' . $post['abstract'] . '</p>
                            </div>';
                      }
                ?> 
            </div>

        </div>
    </body>
</html>