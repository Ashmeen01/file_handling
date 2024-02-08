<?php
session_start();
include "server.php";
$em = "";
if(isset($_POST['btn']) && isset($_FILES['image'])){
    $fname = $_POST['fname'];
    $uname = $_POST['user'];
    $pwd = $_POST['pass'];

    $image_name = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_error = $_FILES['image']['error'];


    //Validation
    if($image_size>2000000){
        $em = "You can only upload an image lessthan 2MB";
    }elseif($image_error!=0){
        $em = "There is an Error !";
    }
    $ext = pathinfo($image_name, PATHINFO_EXTENSION);
    $ext_lc = strtolower($ext);
    $allowed_ext = array('jpg', 'png', 'jepg', 'gif');
    $new_image_name = uniqid('IMG-', true).".".$ext_lc;

    if(!in_array($ext_lc, $allowed_ext)){
        $em = "Unsupported file uploaded";
    }

    move_uploaded_file($image_tmp, 'uploads/'.$new_image_name);

    $sql = "INSERT INTO users (fname, username, img_url, password) VALUES('$fname', '$uname', '$new_image_name', '$pwd')";
    $res = mysqli_query($conn, $sql);

    if($res){
        header("Location: /upload/login.php");
    }
    
}


//LOGIN SECTION
if(isset($_POST['btn_login'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];

    //login logic
    $sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        $_SESSION['logged'] = $username;
        header('Location: user_profile.php');
    }else{
        echo "<script>
            alert('Invalid User Username/Password');
            window.location = 'login.php';
        </script>";
    }
}



?>