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
    if(isset($_GET['users'])){
        echo $_GET['users']."</h1>";
        echo " &nbsp&nbsp&nbsp&nbsp Only this page of the user can be seen..";
    }
    else
    if(isset($_SESSION['u_id']))
    if($_SESSION['u_id']==true)
        echo $_SESSION['u_id']."</h1>";
    ?>
    &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp </div>
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
        </nav>    
        <table style="width:100%;border:1px solid black;border-collapse:collapse;">
            <td class="home" style="border-right:1px solid black;font-size:18px;"><a href="fav.php">&nbsp  FAVORITES &nbsp</a></td>
            <td class="home" style="border-right:1px solid black;font-size:18px;">
                <a href="wl.php"> WATCH LATER </a>
            </td>
            <td class="home"><a class="signup" href="wat.php" style="font-size:18px;"> &nbsp WATCHED &nbsp </a></td>
            <br/>
            <br/>
        
        </table>
        

</header>


<br/>



<?php   
   include_once '../includes/dbh-inc.php';
   if(isset($_GET['users']))
   $uid=$_GET['users'];
   else
   $uid=$_SESSION['u_id'];

   echo "<script>console.log('".$uid."')</script>";
    if(isset($_GET['search'])){
        header("Location: ../search");
    }
?>
<section>
    
    <?php 
    $stmt="SELECT DISTINCT liked,movname,poster FROM trailers WHERE user_uid = '$uid'";
    $result=mysqli_query($con,$stmt);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck>0){
        echo "<h2>LIKED TRAILERS</h2>";
    $sql=$con->prepare("SELECT DISTINCT liked,movname,poster FROM trailers WHERE user_uid = '$uid'");
    $sql->execute();
    $sql->bind_result($fav,$mov,$link);

    $count=0;

    echo "<table style='width:100%;'>";
    echo "<tr >";
    while($sql->fetch()){
        echo "<td style='text-align:center;border:5px solid #b08053;color : #3510ad;'> IMDB ID : ".$fav."<br/> Movie Name : ".$mov."<br/>";
        echo "<a href='../search/details/index.php?id=".$fav."&name=".$mov."&poster=".$link."'><img src='".$link."' style='width:250px;height:375px;'></a></td>";
        if($count==4){
            echo "</tr><tr>";
            $count=0;
        }
        $count++;
    }
    echo "</tr></table>";
    }
    else
        echo "No TRAILERS LIKED..";
     
    ?>
</section>

<p style="text-align:center;font-size:18px;float:right;">
        <a href="visit.php" style="color:gold;background-color:#2D2D2D;border-radius:18px;align:middle;width:250px;height:30px;">&nbsp&nbsp..VISIT FRIENDS PROFILE..&nbsp&nbsp</a>
        </p>

<br/><br/><br/>


</body>
</html>
