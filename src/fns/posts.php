<?php
include("users.php");
function getAllPosts ($uid) {
  // This function should do a mysql query and return 
  // all the posts from the 'Posts' table

  // Open a database connection
  global $config;
  $db = new mysqli($config['hostname'], $config['dbuser'], $config['dbpassword'], $config['dbname']);
  if ($db->connect_error > 0) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
  }
  // Some code to access the database and for processing
  if (!$result = $db->query("SELECT * FROM posts WHERE uid='$uid'")){
    die('There was an error running the query [' . $db->error . ']');
  }
  
  $posts = array();
  while ($row = $result->fetch_assoc()) {
    array_push($posts, $row);
  }
  return $posts;
}

function getSinglePost ($id) {
  // This function should do a mysql query and return ONE post from
  // the 'Posts' table that corresponds to the $id given here.

  // Open a database connection
    global $config;
  $db = new mysqli($config['hostname'], $config['dbuser'], $config['dbpassword'], $config['dbname']);
    if ($db->connect_error>0) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
    $sql = <<<SQL
    SELECT *
    FROM posts
    WHERE post_id = $id 
SQL;

if(!$result = $db->query($sql)){
        die('There was an error running the query [' . $db->error . ']');
}

  return  $result->fetch_assoc();
}

function createNewPost($h, $abs, $cont, $uid){
    global $config;
    $db = new mysqli($config['hostname'], $config['dbuser'], $config['dbpassword'], $config['dbname']);
    if ($db->connect_error>0) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
    }
   
    $stmt = $db->prepare("INSERT INTO posts(heading, abstract,content, uid) VALUES ( ?, ?, ?,?)");
    $stmt->bind_param('ssss',$h, $abs, $cont,$uid);
    if ($stmt->execute() === TRUE) {
        echo "Record created successfully";
    } 
    else {
        echo "Error creating record: " . mysqli_error($db);
    }
    $stmt->close();  
}

function updatePost($id, $h, $abs, $cont){
    global $config;
    $db = new mysqli($config['hostname'], $config['dbuser'], $config['dbpassword'], $config['dbname']);
    if ($db->connect_error>0) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
    }
    
    $stmt = $db->prepare("UPDATE posts SET heading= ?, abstract= ?, content= ? WHERE post_id= ? ");
    $stmt->bind_param('ssss',$h, $abs, $cont, $id);
    
    if ($stmt->execute() === TRUE) {
        echo "Record updated successfully";
    } 
    else {
        echo "Error updating record: " . mysqli_error($db);
    }
    $stmt->close();  
}

    function deletePost($id){
        global $config;
        $db = new mysqli($config['hostname'], $config['dbuser'], $config['dbpassword'], $config['dbname']);
        if ($db->connect_error>0) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
        }

    $sql = "DELETE FROM posts WHERE post_id='$id'";

    if ($db->query($sql) == TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $db->error;
    }
    }

    function createComment($uid, $pid, $content){
        $db = opendb();
        $stmt = $db->prepare("INSERT INTO comments(uid, pid, content) VALUES ( ?, ?, ?)");
        $stmt->bind_param('iis',$uid, $pid, $content);
        if ($stmt->execute() === TRUE) {
            echo "Record created successfully";
        } 
        else {
            echo "Error creating record: " . mysqli_error($db);
        }
        $stmt->close();  
    }

    function getComments($pid){
        $db = opendb();
        $stmt = "SELECT * from comments where pid = '$pid' ";
        if (!$result = $db->query($stmt)){
            die('There was an error running the query [' . $db->error . ']');
        }

        $comments = array();
        while ($row = $result->fetch_assoc()) {
        array_push($comments, $row);
        }
        return $comments;
    }
?>