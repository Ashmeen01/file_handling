<?php
session_start();

include "server.php";

if(!isset($_SESSION['logged'])){
    header('Location: login.php');
    exit();
}else{
    $username = $_SESSION['logged'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    $data = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body{
            background-color:black;
            color: #fff;
            width: 100%;
        }
        .container{
            display:flex;
            flex-direction:column;
           
            align-items:center;
            justify-content: center;
            background-color: goldenrod;
            margin: 0 550px;
            margin-top: 120px;
            border-radius: 2rem;
        }

        img{
            width:80%;
            height:80%;
            border-radius: 50%;
            border: 6px solid white;
        }
        h2{
            font-family: sans-serif;
            color: #fff;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="uploads/<?=$data['img_url'];?>" alt="">
        <h2>Name:<?=$data['fname']; ?></h2>
    </div>
</body>
</html>