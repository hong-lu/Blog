<?php
    include_once(__DIR__."/db.php");

    function checkuname($new_uname){
        $db = opendb();
        $stmt = "SELECT user_name FROM Users WHERE user_name='".$new_uname."'";
        if(!$result = $db->query($stmt)){
            return false;
        }
        else{
            return true;
        }
    }
        
    function addUser($user_name, $email, $gender, $password, $pf_name){
        $db = opendb();    
        $stmt = $db->prepare("INSERT INTO users(user_name, email, gender, password, pf_name) VALUES ( ?, ?, ?, ?, ?)");
        $stmt->bind_param('sssss',$user_name, $email, $gender, $password, $pf_name);
        if ($stmt->execute() === TRUE) {
            echo "Record created successfully";
        } 
        else {
            echo "Error creating record: " . mysqli_error($db);
        }

        $stmt->close();
        return getUserId($user_name);
    }


    function getUserId($uname){
        $db = opendb(); 
        $stmt2 = "SELECT * FROM users WHERE user_name = '$uname' ";
        if(!$result = $db->query($stmt2)){
            die('There was an error running the query [' . $db->error . ']');
        }   

        $row = $result->fetch_assoc();
        return $row['uid'];
    }


    function loginCheck($uname, $password){
        $db = opendb();
        $sql = "SELECT * FROM users WHERE user_name = '$uname' and password= '$password'";
        $result= $db->query($sql);
        if(!$result = $db->query($sql)){
            die('There was an error running the query [' . $db->error . ']');
        }
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['uid'] = $row['uid'];
        return $row['uid'];
    }
   

    function getUserInfo($uid){
        $db = opendb();
        $sql = "SELECT * FROM users WHERE uid = '$uid' ";
        $result= $db->query($sql);
        if(!$result = $db->query($sql)){
            die('There was an error running the query [' . $db->error . ']');
        }
        $row = $result->fetch_assoc();       
        return $row;
    } 

    function logOut() {
        if (isset($_SESSION['uid'])) {
            session_unset();
            session_destroy();
            return "Log Out Successfully!";
        }else{
            return false;
        }
    }
    
    function changeUserInfo($email, $gender, $password, $pf_name){
        $db = opendb();
        $stmt = $db->prepare("UPDATE users SET email = ?, gender = ?, password = ?, pf_name = ? WHERE uid = ?");
        $stmt->bind_param('ssssi', $email, $gender, $password, $pf_name, $_SESSION['uid']);
        if ($stmt->execute() === TRUE) {
            echo "Record updated successfully";
        } 
        else {
            echo "Error updating record: " . mysqli_error($db);
        }
        $stmt->close();  
    }
?>