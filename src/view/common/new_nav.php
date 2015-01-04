<?php  
session_start();
$uid = $_SESSION['uid'];
if (isset($_GET['uid'])){
    $uid = $_GET['uid'];
}
  
?>
<nav id="autohide_navbar" class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="font-family:Papyrus" href="../index.php">MilkyBlog</a>
    </div>

    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo "all_posts.php?uid=".$myid; ?>">All My Posts</a></li>
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

        <ul class="nav navbar-nav navbar-right">
            <li style="margin-right: 20px"><a class="btn" style="text-decoration:none;" href="manage_input/logout.php" >Log Out</a></li>
        </ul>
      
    </div>
</nav>