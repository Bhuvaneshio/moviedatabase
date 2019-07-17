<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Page</title>
    <style>
    #info{
        border-bottom:1px solid yellow;
        color : #0418b3;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
    }
    span{
        color:red;
        float:right;
    }
    header{
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color:rgb(58, 54, 54);

    }
    button{
        background-color: rgb(33, 33, 33);
        color:gold;
        height:40px;
        width:20%;
        margin-top:10px;
        margin-left:15px;
        border-radius:18px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body{
        background-color:rgb(173, 173, 173);
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color:#000000;
    }
    input{
        margin-left:10px;
        background-color:rgb(33, 33, 33);
        border:1px solid gold;
        color:black;
        height:50px;
        border-radius:18px;
        text-align:center;
        width:25%;
    }
    input:hover{
        background-color:white;
        border:2px solid gold;
    }
    button:hover{
        border:2px solid gold;
    }
    a{
        color:rgb(173, 173, 173);
        text-decoration:none;}
    a:hover{
        color:blue;
        font-style:italic;
    }
    nav {
    display:table;
    width:100%;
    text-align:center;
    }
    nav div{
        display:table-cell;
        width:33%;
        text-align:center;
        color:rgb(173, 173, 173);

    }
    .home{
        text-align:center;border:1px solid black;
        height:40px;
    }
    </style>
</head>
<body>

<header>
<br/><br/>
        <nav>
            <div><h1>PROFILE PAGE of <?php session_start();
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(-1);
    if(isset($_SESSION['u_id']))
    if($_SESSION['u_id']==true)
        echo $_SESSION['u_id'];
    ?>
    &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp </h1></div>
        </nav>
        
        <nav>
        <table style="width:100%;border:1px solid black;border-collapse:collapse;">
        
            <td class="home" style="border-right:1px solid black;"><a href="index.php">&nbsp&nbsp&nbsp&nbspHOME &nbsp&nbsp&nbsp</a></td>
            <td class="home" style="border-right:1px solid black;font-size:18px;">
                <a href="../search/index.php"> &nbsp&nbsp&nbspSEARCH MOVIES FROM omdb</a>
            </td>
            <td class="home"><a class="signup" href="../index.php"> &nbsp SIGN OUT &nbsp </a></td>
            <br/>
            <br/>
        </table>
</header>

<section>
<p>You are trying to access the profile page of another user..!</p>
<p>Hope you know the user name of the other user..</p>
</section>

<form ><div style="text-align:center;">
<input type="text" name="user" placeholder=" User Name of friend"><br/></div>
<div style="text-align:center;">
<button type="submit" name="view" value="given">    VIEW    </button></div>
</form>

<?php
include_once '../includes/dbh-inc.php';


$uid=$_SESSION['u_id'];

if(isset($_GET['view']) && isset($_GET['user'])){
    $user=$_GET['user'];
    $stmt="SELECT * FROM users WHERE user_uid = '$user' ";
    $result=mysqli_query($con,$stmt);
    $resultCheck=mysqli_num_rows($result);

    if($resultCheck==1){
        header("Location: index.php?users=".$user);
    }
    else
        echo "<br/>No user found..<br/>Dont cheat..";
}

?>