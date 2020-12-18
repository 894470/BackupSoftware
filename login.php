<?php
if($_POST){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "test";

    $username = $_POST['username'];
    $password = $_POST['password'];


    $conn = mysqli_connect($host, $user, $pass, $db);
    $query = "SELECT  *  FROM `register` where username ='$username' and password = '$password' ";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['test']='true';
        header('location:menu.php');

    }
    else{
        echo("wrong username/password");
    }

}



?><!DOCTYPE html>


<html>

<head>
    <title>SBS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 style="text-align: center;">Welcome to Secure backup software!</h1>
    <p style="text-align: center;">this is your backup system, uplaod and download your files whenever you want.</p>
    <div class="div1">
        <h2 id="login_heading">Login</h2>
        <form method="POST" action="">
            Username:<input id="user" type="text" name="username"> <br> Password:
            <input id="user" type="password" name="password"><br>
            <a href="menu.html"><button id="bt" type="submit">Login</button></a><br> Don't have an account then
            <a href="form.html">
                Signup
            </a>

    </div>
</body>