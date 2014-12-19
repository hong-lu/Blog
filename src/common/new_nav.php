<nav id="autohide_navbar" class="navbar navbar-default navbar-fixed-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" style="font-family:Papyrus" href="index.php">MilkyBlog</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="all_posts.php?uid=".$_GET['uid']>All Posts</a>
      </li>
      <li><a href="new_post.php">New Post</a>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account Setting<b class="caret"></b></a>
        <ul style="margin-top: 0px; display: none;" class="dropdown-menu">
          <li><a href="#">Action</a>
          </li>
          <li><a href="#">Another action</a>
          </li>
          <li><a href="#">Something else here</a>
          </li>
          <li class="divider"></li>
          <li class="dropdown-header">Dropdown header</li>
          <li><a href="#">Separated link</a>
          </li>
          <li><a href="#">One more separated link</a>
          </li>
        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-left">
      <input class="form-control col-lg-8" placeholder="Search" type="text">
      <button type="submit" class="btn btn-success" >Search</button>
    </form>
      
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-right: 20px" >Explore Around <b class="caret"></b></a>
        <ul style="margin-top: 0px; display: none;" class="dropdown-menu">
          <li><a href="#">Action</a>
          </li>
          <li><a href="#">Another action</a>
          </li>
          <li><a href="#">Something else here</a>
          </li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a>
          </li>
        </ul>
      </li>
    </ul>
      
  </div>
</nav>