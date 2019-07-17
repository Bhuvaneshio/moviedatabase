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
        color : #2D2D2D;
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
    form{
        text-align:center;
    }
    #src p{
        text-align:center;
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
            <td class="home" ><a href="../../profile/index.php">&nbsp  HOME &nbsp</a></td>
            <td class="login" style="font-size:18px;">
                <a href="../index.php">SEARCH MOVIES FROM omdb</a>
            </td>
            <td class="home"><a class="signup" href="../../index.php"> &nbsp SIGN OUT &nbsp </a></div>
        </table>
        </nav>
    </header>    
    <br/><br/><br/>
    

        <div id="info"></div>
        <div id="src"> </div>
        <form method="POST">
            <button type="submit" name="like" value="given" style="width:100px;"> LIKE </button>
        </form>
<br/><br/>
        <form method="POST">
            <input type="text" name="comment" placeholder="Write ur comment here..">
            <br/>
            <button type="submit" name="com"> ADD COMMENT </button>
        </form>
        
<br/><br/>




<br/><br/>

<h2> :: mark as ::</h2>
    <form method="POST">
        
            <button type="submit" name="fav" value="given">FAVORITES</button>
            <button type="submit" name="wl" value="given">WATCH LATER</button>
        
    </form>
<br/><br/><br/>
</body>
</html>
<?php
session_start();
// echo $_SESSION['u_id'];
include_once 'searchid.php';
include_once '../../includes/dbh-inc.php';
$uid=$_SESSION['u_id'];

/*
if(isset($_POST['com']) ){
    $id=$_GET['id'];
    $comm=mysqli_real_escape_string($con,$_POST['comment']);
    $sql="INSERT INTO comments (user_uid,time,comment,imdb) VALUES ('$uid',CURRENT_TIMESTAMP,'$comm','$id')";
    $query=mysqli_query($con,$sql);
    if($query)
        echo '<script>alert("inserted comment")</script>';  
    else
        echo "nothing really happened <br/>";      
}
$stmt=$con->prepare("SELECT DISTINCT user_uid,time,comment,imdb FROM comments WHERE imdb = '$id' AND comment <> '' ORDER BY time DESC");
$stmt->execute();
$stmt->bind_result($user,$time,$comm,$mid);
while($stmt->fetch()){
    if($comm!=null)
echo "<h3><pre>".$user." @ ".$time."</pre> </h3>".$comm;
}
*/
$id = $_GET['id'];
if(isset($_POST['com'])){
    
     $id = $_GET['id'];
     $comment = mysqli_real_escape_string($con, $_POST['comment']);
  
     $sql = "INSERT INTO comments (imdb, time, user_uid, comment) VALUES ('$id',CURRENT_TIMESTAMP, '$uid', '$comment');";
    mysqli_query($con, $sql);
     
    }
    $stmt = $con->prepare("SELECT * FROM comments WHERE imdb='$id' ORDER BY time DESC");
$stmt->execute();
$stmt->bind_result($user, $time, $comment, $movieid);
while($stmt->fetch()){

  if($comment!=null){
    echo "<h3><pre>".$user." @ ".$time."</pre> </h3>".$comment;
  }

   
}



if(isset($_POST['like'])){
    if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['poster'])){
        $id=$_GET['id'];
        $name=$_GET['name'];
        $poster=$_GET['poster'];
        $sql="INSERT INTO trailers (user_uid,liked,movname,poster) VALUES ('$uid','$id','$name','$poster')";
        $query=mysqli_query($con,$sql);
        if($query){
            echo "Liked..!";
        }
        else
            echo "You're unlucky dude..Try some other time..";
    }
}

if(isset($_POST['fav'])){
    if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['poster'])){
        $id=$_GET['id'];
        $name=$_GET['name'];
        $poster=$_GET['poster'];
        $sql="INSERT INTO favoritemov (user_uid,imdbid,movname,poster) VALUES ('$uid','$id','$name','$poster')";
        $query=mysqli_query($con,$sql);
        if($query){
            echo "Inserted as Favorite";
        }
        else
            echo "You're unlucky dude..Try some other time..";
    }
}

if(isset($_POST['wl'])){
    if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['poster'])){
        $id=$_GET['id'];
        $name=$_GET['name'];
        $poster=$_GET['poster'];
        $sql="INSERT INTO watchlater (user_uid,imdbid,movname,poster) VALUES ('$uid','$id','$name','$poster')";
        $query=mysqli_query($con,$sql);
        if($query){
            echo "Inserted to Watch Later";
        }
        else
            echo "You're unlucky dude..Try some other time..";
    }
}


if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['poster'])){
    $id=$_GET['id'];
    $name=$_GET['name'];
    $poster=$_GET['poster'];
    $sql="INSERT INTO watched (user_uid,imdbid,movname,poster) VALUES ('$uid','$id','$name','$poster')";
    $query=mysqli_query($con,$sql);
    if($query){
        echo "<br/> ";
    }
    else
        echo "Cannot add as watched.. Try again loading the page..";
}


?>

<br/><br/><br/>