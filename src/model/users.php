<?php
    include_once(__DIR__."/db.php");

    function checkUname($new_uname){
        $db = opendb();
        $stmt = $db->prepare("SELECT * FROM users WHERE user_name = ?");
        $stmt ->bind_param('s', $new_uname);
        if($stmt->execute() === TRUE){
             return true;
        }
        else{
            $result = $stmt->get_result();
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
        $stmt->bind_param('sssss',$user_name, $email, $gender, md5($password), $pf_name);
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
        $stmt = $db->prepare("SELECT * FROM users WHERE user_name = ? ");
        $stmt->bind_param('s', $uname);
        if(!$result = $stmt->get_result()){
            die('There was an error running the query [' . $db->error . ']');
        }   

        $row = $result->fetch_assoc();
        return $row['uid'];
    }


    function loginCheck($uname, $password){
        $db = opendb();
        $password = md5($password);
        $stmt = $db->prepare( "SELECT * FROM users WHERE user_name = ? AND password= ?");
        $stmt ->bind_param('ss', $uname, $password);
        if(!$stmt->execute()){
            die('There was an error running the query [' . $db->error . ']');
        }
        $result = $stmt->get_result();
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
    
    function changeUserInfo($email, $pf_name, $age, $address, $gender, $intro){
        $db = opendb();
        $stmt = $db->prepare("UPDATE users SET email = ?, pf_name = ?, age = ?, address = ?, gender = ?, intro = ? WHERE uid = ?");
        $stmt->bind_param('ssisssi', $email, $pf_name, $age, $address, $gender, $intro, $_SESSION['uid']);
        if ($stmt->execute() === TRUE) {
            echo "Record updated successfully";
        } 
        else {
            echo "Error updating record: " . mysqli_error($db);
        }
        $stmt->close();  
    }

    function changeSecuritySetting($password){
        $db = opendb();
        $stmt = $db->prepare("UPDATE users SET password = ? WHERE uid = ?");
        $stmt->bind_param('si', $password, $_SESSION['uid']);
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
        $url = htmlspecialchars($url);
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