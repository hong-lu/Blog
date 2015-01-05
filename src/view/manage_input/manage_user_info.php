<?php
include_once("../../model/users.php");
session_start();

if ($_POST['action'] == "login"){
    if($uid = loginCheck($_POST['user_name'], $_POST['password'])){
        header("Location: ../all_posts.php?uid=".$uid);
    }
    else{
        echo  "<script> alert('Wrong Username or Password!');
    window.location = '../../index.php'; </script>";
        
    }
}

else if ($_POST['action'] == "preference"){
    changeUserInfo($_POST['email'], $_POST['pf_name'], $_POST['age'], $_POST['address'], $_POST['gender'],  $_POST['intro']);
    header("Location: ../all_posts.php?uid=".$_SESSION['uid']);
}

else if ($_POST['action'] == "security"){
    changeSecuritySetting( $_POST['pass1']);
    header("Location: ../all_posts.php?uid=".$_SESSION['uid']);
}

else if ($_POST['action'] == "profile"){
    $error = '';
    $target_dir = "../../static/uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            $error = "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $error = "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $error = "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo '<script> alert("'.$error.'");
            window.location = "../profile.php"; </script>'; 
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            uploadImg( $_FILES["fileToUpload"]["name"]);
            header("Location: ../all_posts.php?uid=".$_SESSION['uid']);
        } else {
            echo
            "<script> alert('Sorry, there was an error uploading your file.');
            window.location = '../profile.php'; </script>";
        }
    }
}

?>