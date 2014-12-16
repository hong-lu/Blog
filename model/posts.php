<?php

function getAllPosts () {
  // This function should do a mysql query and return 
  // all the posts from the 'Posts' table

  // Open a database connection
  // $db = new mysqli($config['hostname'], $config['dbuser'], $config['dbpassword'], $config['dbname']);
  // if (!$mysqli->connect_errno) {
  //   printf("Connect failed: %s\n", $mysqli->connect_error);
  //   exit();
  // }
  // Some code to access the database and for processing
  // if (!$result = $db->query("SELECT * from <table_name>");){
  //   die('There was an error running the query [' . $db->error . ']');
  // }
  // 
  // $posts = array();
  // while ($row = $result->fetch_assoc()) {
  //   array_push($posts, $row);
  // }
  // return $posts;

  // The following is an example of the return value. But of course, your real
  // return value will not be so simple. It should be an array of arrays (:
  $posts = array(
    'HL Post 1', 'HL Post 2', 'HL Post 3', 'HL Post 4', 'HL Post 5', 'HL Post 6'
  );

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
