<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Search</title>
    <style>
    #info{
        border-bottom:1px solid yellow;
        border-top:1px solid yellow;
        color : blue;
        font-family:Verdana, Geneva, Tahoma, sans-serif;

        width:100%;
        text-align:center;
    }
    #info td{
        border:5px solid gray;
        width:16%;
        text-align:center;
        color:blue;
    }
    img{
        position:absolute;
        top:17px;
        left:18px;
    }
    header{
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color:rgb(58, 54, 54);

    }
    button{
        background-color: rgb(33, 33, 33);
        color:gold;
        height:40px;
        margin-top:10px;
        margin-left:15px;
        border-radius:18px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        width:20%;
    }
    #btn{
        width:10%;
        height:40px;
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
        border:2px solid gold;
        color:black;
    }
    button:hover{
        border:2px solid gold;
    }
    a{
        color:rgb(173, 173, 173);
        text-decoration:none;
    }
    a:hover{
        color:blue;
        font-style:italic;
    }
    
    .hide-me{
        visibility:hidden;
        display:none;
    }
    .show-me{
        visibility:visible;
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
        color:rgb(173, 173, 173);
    }
    section{
        text-align:center;
    }
    /* relevant styles */
.img__wrap {
  position: relative;
  height: 410px;
  width: 250px;
}

.img__description {
  position: absolute;
  top:0;
  left:18px;
  width:250px;
  height:375px;
  background: rgba(29, 106, 154, 0.72);
  color: #fff;
  visibility: hidden;
  opacity: 0;

  /* transition effect. not necessary */
  transition: opacity .2s, visibility .2s;
}

.img__wrap:hover .img__description {
  visibility: visible;
  opacity: 1;
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
            <td class="home" style="font-size:18px;">
                <a href="index.php">SEARCH MOVIES FROM omdb</a>
            </td>
            <td class="home"><a class="signup" href="../index.php"> &nbsp SIGN OUT &nbsp </a></div>
        </table>
        </nav>
        
    
    </header>
    <br/><br/><br/>

    <form >
            <div style="text-align:center;">
            <input type="text" name="name" placeholder=" Movie Name">
            <input type="number" name="year" placeholder=" Year">
            <input type="text" name="type" placeholder=" Type">
            </div>
            <div style="text-align:center;">
                <button><strong> SEARCH </strong></button>
            </div>
    </form>

    <table id="info"></table>

    <button class="hide-me" type="submit" name="submit" id="btn"> NEXT PAGE </button>

<br/><br/>

    <?php include_once 'search.php'; ?>
</body>
</html>
