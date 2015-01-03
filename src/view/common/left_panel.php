<div class="col-lg-3">
    <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="glyphicon glyphicon-user" style="margin-right: 10px;" aria-hidden="true"></span>
            Author's Personal Infomation
        </h3>
    </div>

    <div class="panel-body">
        <?php $result = getUserInfo($id); 
        echo "Name: ". $result['pf_name']."<br>
        Gender:".$result['gender']." <br>
        Email:". $result['email']." <br>";
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
                <span class="glyphicon glyphicon-folder-open" style="margin-right: 10px;" aria-hidden="true"></span>
                Archive 
            </h3>
        </div>

        <div class="panel-body" style="padding:0px; border: 1px solid #2c3e50">
            <div class="list-group" style="margin:0">

                <?php  
                $posts = getAllPosts($id); 
                if ($posts){
                    foreach ($posts as $post) {
                        if (isset($_GET['post']) && ($post['post_id'] == $_GET['post'])){
                            echo '<a  class="list-group-item" style="background-color:#18bc9c" href="single_post.php?post='.$post['post_id'].'">' .$post['heading']. '</a>' ;
                        }
                        else{
                            echo '<a  class="list-group-item" href="single_post.php?post='.$post['post_id'].'">' .$post['heading']. '</a>' ;
                        }
                    }
                }
                else{
                    echo '<p style = "padding: 20px"> Current user has not created any post yet!';
                }
                ?>

            </div>
        </div>

    </div>
</div>