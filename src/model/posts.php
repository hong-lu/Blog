<?php
    include_once(__DIR__."/db.php");
    function getAllPosts ($uid) {
      $db = opendb();
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
        $db = opendb();
        $sql = 'SELECT * FROM posts WHERE post_id ='.$id;

        if(!$result = $db->query($sql)){
            die('There was an error running the query [' . $db->error . ']');
        }

        return  $result->fetch_assoc();
    }

    function createNewPost($h, $abs, $cont, $uid){
        $db = opendb();
        $stmt = $db->prepare("INSERT INTO posts(heading, abstract, content, uid) VALUES ( ?, ?, ?,?)");
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
        $db = opendb();
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
        $db = opendb();

        $sql = "DELETE FROM posts WHERE post_id='$id'";

        if ($db->query($sql) == TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $db->error;
        }
    }

    function createComment($uid, $pid, $content){
        $db = opendb();
        $stmt = $db->prepare("INSERT INTO comments(uid, pid,content) VALUES ( ?, ?, ?)");
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
    
    function getPosts(){
        $db = opendb();
        $stmt = "SELECT * from posts";
        $result = $db->query($stmt);
        $posts = array();
        while ($row = $result->fetch_assoc()) {
            array_push($posts, $row);
        }
        return $posts;
    }
?>