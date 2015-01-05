<div class="col-lg-3">
    <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="glyphicon glyphicon-user glyphicon-margin" aria-hidden="true"></span>
            Author's Personal Infomation
        </h3>
    </div>

    <div class="panel-body">
        <?php $result = getUserInfo($uid); 
        echo "Name: ". $result['pf_name']."<br>
        Gender: ".$result['gender']." <br>
        Email: ". $result['email']." <br>";
        if ($result['age'] != 0){
          echo "Age : ".$result['age']." <br>";
        }
        if (!empty($result['address'])){
          echo "Address : ".$result['address']." <br>";
        }
        ?>
    </div>

    </div>

    <div class="panel-primary">

        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="glyphicon glyphicon-folder-open glyphicon-margin" aria-hidden="true"></span>
                Archive 
            </h3>
        </div>

        <div class="panel-body left-panel-body">
            <div class="list-group li-grp">

                <?php  
                $posts = getAllPosts($uid); 
                if ($posts){
                    foreach ($posts as $post) {
                        if (isset($_GET['post']) && ($post['post_id'] == $_GET['post'])){
                            echo '<a  class="list-group-item color-success" href="single_post.php?post='.$post['post_id'].'">' .$post['heading']. '</a>' ;
                        }
                        else{
                            echo '<a  class="list-group-item" href="single_post.php?post='.$post['post_id'].'">' .$post['heading']. '</a>' ;
                        }
                    }
                }
                else{
                    echo '<p class="MyWell"> Current user has not created any post yet! </p>';
                }
                ?>

            </div>
        </div>

    </div>
</div>