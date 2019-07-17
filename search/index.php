<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Search</title>
    <style>
        
    #info{
        border-bottom:1px solid yellow;
        color : blue;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
    }
    header{
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color:rgb(58, 54, 54);

    }
    button{
        background-color: rgb(33, 33, 33);
        color:gold;
        width:120px;
        height:30px;
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
        color:white;
        height:30px;
        border-radius:18px;
        text-align:center;
    }
    input:hover,button:hover{
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
    td{
        text-align:center;border:1px solid black;
        height:40px;
        color:rgb(173, 173, 173);
    }
    section{
        text-align:center;
    }
    select{
    display:block;
    margin:0 auto;
    width:30%;
    height:35px;
    padding:0px 5%;
    margin-bottom:8px;
    border:none;
    background-color:#fff;
    font-family:arial;
    font-size:14px;
    color:#111;
    line-height:40px;
    border-radius:18px;
}
    </style>
    
</head>
<body>
    <header>
    <br/><br/>
        <nav>
            <div><h1>OMDB API &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp </h1></div>
        </nav>
        <br/><br/>
        
        <nav>
        <table style="width:100%;border:1px solid black;border-collapse:collapse;">
            <td class="home" ><a href="../profile/index.php">&nbsp  HOME &nbsp</a></td>
            <td class="login" style="font-size:18px;">
                SEARCH MOVIES FROM omdb
            </td>
            <td class="home"><a class="signup" href="../index.php"> &nbsp SIGN OUT &nbsp </a></div>
        </table>
        </nav>
    </header>    
    <br/><br/><br/>
    <section>
        <h3>Search Movie BY</h3>
        <form >
            <select name="quest" id="">
                <option value="no">select</option>
                <option value="id"> ID </option>
                <option value="title"> Title </option>
            </select>
            <button type="submit" name="submit" value="ok" id="btn"><strong> SELECT </strong></button>
        </form>
    </section>
    

<br/><br/>


    <script src="search.js"></script>
</body>
</html>

<?php

if(isset($_GET['quest']) && isset($_GET['submit'])){
$option=$_GET['quest'];
switch($option){
    case 'id': header("Location: movieid.php");
    break;
    case 'title': header("Location: movtit.php");
    break;
    case 'no': echo " Dude.. Select a search criteria..!"; 
    break;
}
}


?>