<?php  
error_reporting(0);
if(!isset($_SESSION)){
    session_start();
}
if (isset($_SESSION['uid'])){
    $uid = $_SESSION['uid'];
}else{
    $_SESSION['uid'] = '';
}
if (isset($_GET['uid'])){
    $uid = $_GET['uid'];
}
else{
    $uid = $_SESSION['uid'];
}
  
?>
<nav id="autohide_navbar" class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand BlogName" href="../index.php">MilkyBlog</a>
    </div>

    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo "all_posts.php?uid=".$_SESSION['uid']; ?>">All Posts</a></li>
            <li><a href="new_post.php">New Post</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account Settings <b class="caret"></b></a>
                <ul class="dropdown-menu">
              <li><a href="security_setting.php">Security Setting</a>
              </li>
              <li><a href="preference_setting.php">Preference Setting</a>
              </li>
              <li><a href="profile.php">Upload Profile Image</a>
              </li>
                </ul>
            </li>
        </ul>
        <form class="navbar-form navbar-left" method="post" action="search_result.php">
            <input name="keyword" class="form-control" type="text">
            <button type="submit" class="btn btn-success" >Search Post</button>
        </form>

        <ul class="nav navbar-nav navbar-right">
            <li class="logout-btn"><a class="btn a-none" href="manage_input/logout.php" >Log Out</a></li>
        </ul>
      
    </div>
</nav>