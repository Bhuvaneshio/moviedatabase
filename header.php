<?php
session_start();


/*
<link rel="stylesheet" href="styles.css">


<header>
    <nav>
        <div class="home"><a href="index.php">&nbsp  HOME &nbsp</a></div>
        <div class="login">
            <form action="includes/login-inc.php" method="POST">
                <input type="text" name="user" placeholder="User Name"> 
                <input type="password" name="pass" placeholder="PassWord">
                <button type="submit" name="login" value="submit"> LOGIN </button>
            </form>
            <br/><br/>
        </div>
        <div><a class="signup" href="signup.php"> &nbsp SIGN UP &nbsp </a></div>

    </nav>
</header>

*/
?>
<style>
header{
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color:rgb(33, 33, 33);
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
    td{
        text-align:center;border:1px solid black;
        height:40px;
        color:rgb(173, 173, 173);
    }
    a{
        color:rgb(173, 173, 173);
        text-decoration:none;}
    .signup1{
        color:magenta;
        text-decoration:none;
    }
    a:hover{
        color:blue;
        font-style:italic;
    }
    button{
        background-color: rgb(33, 33, 33);
        color:gold;
        width:220px;
        height:40px;
        margin-top:10px;
        margin-left:15px;
        border-radius:18px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    input{
        margin-left:10px;
        width:350px;
        background-color:rgb(33, 33, 33);
        border:1px solid gold;
        color:gold;
        height:40px;
        border-radius:18px;
        text-align:center;
    }
    input:hover{
        background-color:white;
        border:2px solid gold;
    }
    button:hover{
        color:gold;
        border:2px solid gold;
    }
    body{
        background-color:rgb(173, 173, 173);
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color:#000000;
    }
    
    </style>
<header>
    <br/><br/>
        <nav>
            <div><h1> MOVIE DATABASE &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp </h1></div>
        </nav>
        <br/><br/>
        
        <nav>
        <table style="width:100%;border:1px solid black;border-collapse:collapse;">
            <td class="home" ><a href="index.php">&nbsp  HOME &nbsp</a></td>
            
            <td class="home"><a class="signup" href="signup.php"> &nbsp SIGN UP &nbsp </a></div>
        </table>
        </nav>
        
    
</header>