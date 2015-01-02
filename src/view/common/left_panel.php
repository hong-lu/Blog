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
          <a href="#" class="list-group-item active" style="background-color:#18bc9c">
            2014
          </a>
          <a href="#" class="list-group-item">Dapibus ac facilisis in
          </a>
          <a href="#" class="list-group-item">Morbi leo risus
          </a>
        </div>
      </div>
    </div>

</div>