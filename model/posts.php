<?php

function getAllPosts () {
  // This function should do a mysql query and return 
  // all the posts from the 'Posts' table

  // Open a database connection
  global $config;
  $db = new mysqli($config['hostname'], $config['dbuser'], $config['dbpassword'], $config['dbname']);
  if ($db->connect_errno > 0) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
  }
  // Some code to access the database and for processing
  if (!$result = $db->query("SELECT * FROM posts")){
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
  // $mysqli = new mysqli($config['hostname'], $config['dbuser'], $config['dbpassword'], $config['dbname']);
  // if (!$mysqli->connect_errno) {
    // printf("Connect failed: %s\n", $mysqli->connect_error);
    // exit();
  // }
  // Blah blah blah...

  return 'This is the return result of a single post';
}

?>
