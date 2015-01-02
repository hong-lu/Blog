<?php

require_once("/../config/config.php");
function opendb(){
    global $config;
    $db = new mysqli($config['hostname'], $config['dbuser'], $config['dbpassword'], $config['dbname']);
    if ($db->connect_errno > 0) {
        printf("Connect failed: %s\n", $db->connect_error);
        exit();
    }
    else{
        return $db;
    }
}
?>