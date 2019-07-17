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
        color:white;
        height:50px;
        border-radius:18px;
        text-align:center;
        width:25%;
    }
    input:hover{
        background-color:white;
        color:black;
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
    td{
        text-align:center;border:1px solid black;
        height:40px;
        color:rgb(173, 173, 173);
    }
    #src p{
        text-align:center;
    }
    
    </style>
</head>
<body>
    <header>
    <br/><br/><br/>
        <nav>
            <div><h1>OMDB API &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp </h1></div>
        </nav>
        <br/><br/>
        
        <nav>
        <table style="width:100%;border:1px solid black;border-collapse:collapse;">
            <td class="home" ><a href="../profile/index.php">&nbsp  HOME &nbsp</a></td>
            <td class="login" style="font-size:18px;">
                <a href="index.php">SEARCH MOVIES FROM omdb</a>
            </td>
            <td class="home"><a class="signup" href="../index.php"> &nbsp SIGN OUT &nbsp </a></div>
        </table>
        </nav>
        
    
    </header>
    <br/><br/>
        <form >
            <input type="text" name="mid" placeholder=" Movie IMDB ID">
            <button type="submit" name="search" >CONFIRM</button>
            <br/>
        </form>
    <div id="info"></div>
    <span id="news"></span>

<br/><br/><br/>
 <?php     
 
 include_once 'searchid.php'; 
 ?>
</body>

</html>