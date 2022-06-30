<?php
session_start();
require 'db_connection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

    $user_email = $_SESSION['user_email'];
    $get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
    $userData =  mysqli_fetch_assoc($get_user_data);

}else{
    header('Location: logout.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="all" type="text/css">
    <title>Home</title>
    <style>
        body{
            background-color: whitesmoke;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 360px;
            margin: auto;
            text-align: center;
            font-family: arial;
            border-radius:3%;
            margin-top: 30px;
        }
        .card-1{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 800px;
            margin: auto;
            text-align: center;
            border-radius: 2%;
        }
        .card-1 h4{
            display: inline-block;
        }
        .title {
            color: saddlebrown;
            font-size: 25px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: #8f8d8d;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 50%;
            font-size: 18px;
            border-radius: 5%;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: #4c5959;
        }

        button:hover, a:hover {
            color: black;
            background-color: white;
        }
        p{
            color: black;
        }
        .cssmarquee {
            height: 50px;
            overflow: hidden;
            position: relative;
        }
        .cssmarquee h1 {
            position: absolute;
            color: #4c5959;
            width: 100%;
            height: 100%;
            margin: 0;
            text-align: center;
            font-family: "HP Simplified Jpan Light";
            transform: translateX(-100%);
            animation: cssmarquee 10s linear infinite;
        }
        @keyframes cssmarquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
    </style>
</head>

<body>
<div class="card-1">
    <div class="cssmarquee">
        <h1>WELCOME TO EMOBILIS INSTITUTE OF TECHNOLOGY</h1>
    </div>
    <h4 style="color: red">Technology</h4>
    <h4 style="color: blue">Innovation</h4>
    <h4 style="color: green">Entrepreneurship</h4>
    <h4 style="color: red">@eMobilis</h4>
</div>
<div class="card">
    <img src="dp.png" alt="emobilis" style="width:100%;border-top-left-radius:3% ;border-top-right-radius:3%  ">
    <h2 style="font-family: 'Book Antiqua'">STUDENT</h2>
    <p class="title" style="font-family: Papyrus;font-size: 25px;"><?php echo $userData['username'];?></p>
    <p style="font-family: 'Corbel Light';font-size: 22px">EMOBILIS INSTITUTE OF TECHNOLOGY</p>
    <div style="display: inline-block; gap: 2rem;text-align: center">
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-reddit"></i></a>
        <a href="#"><i class="fa fa-stack-overflow"></i></a>
    </div>
    <div class="log">
        <button><a href="logout.php">Logout</a> </button>
    </div>

</div>

<script src="https://kit.fontawesome.com/59d1a7b41d.js" crossorigin="anonymous"></script>
</body>
</html>