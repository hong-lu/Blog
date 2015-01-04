<?php
    include_once(__DIR__."/db.php");

    function checkUname($new_uname){
        $db = opendb();
        $stmt = "SELECT * FROM users WHERE user_name = '$new_uname' ";
        if(!$result = $db->query($stmt)){
             return false;
        }
        else{
            $row = $result->fetch_assoc();
            if(empty($row)){
                return false;
            }
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
        $stmt = "SELECT * FROM users WHERE user_name = '$uname' ";
        if(!$result = $db->query($stmt)){
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
    
    function changeUserInfo($pf_name, $age, $address, $gender, $intro){
        $db = opendb();
        $stmt = $db->prepare("UPDATE users SET pf_name = ?, age = ?, address = ?, gender = ?, intro = ? WHERE uid = ?");
        $stmt->bind_param('sisssi', $pf_name, $age, $address, $gender, $intro, $_SESSION['uid']);
        if ($stmt->execute() === TRUE) {
            echo "Record updated successfully";
        } 
        else {
            echo "Error updating record: " . mysqli_error($db);
        }
        $stmt->close();  
    }

    function changeSecuritySetting($email, $password){
        $db = opendb();
        $stmt = $db->prepare("UPDATE users SET email = ?, password = ? WHERE uid = ?");
        $stmt->bind_param('ssi', $email, $password, $_SESSION['uid']);
        if ($stmt->execute() === TRUE) {
            echo "Record updated successfully";
        } 
        else {
            echo "Error updating record: " . mysqli_error($db);
        }
        $stmt->close();  
    }

    function uploadImg($url){
        $db = opendb();
        $stmt = $db->prepare("UPDATE users SET img = ? WHERE uid = ?");
        $stmt ->bind_param('si', $url, $_SESSION['uid']);
        if ($stmt->execute() === TRUE) {
            echo $_SESSION['uid'];
            echo "Record updated successfully";
        } 
        else {
            echo "Error updating record: " . mysqli_error($db);
        }
        $stmt->close();  
    }
?>