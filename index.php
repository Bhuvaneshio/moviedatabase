<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>

</head>
<body>

<?php   include_once 'header.php'; 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
if(isset($_SESSION['u_id']))
if($_SESSION['u_id']==true)
    echo "<br/> Previous User : '".$_SESSION['u_id']."'";
?>
<br/><br/><br/><br/>
<section style="diaplay:felx;">
<div class="info" style="float:left;">
        <h2> HOME </h2>
        <h4>
            <p>Do u have an account ?</p>
            <p>If u have one just <a class="signup1" href="index.php?warning=enterDetails" >&nbsplogin &nbsp</a></p>
            <p>If u dont have one click <a class="signup1" href="signup.php" >&nbspsign up&nbsp</a> and create an account</p>
        </h4>
</div>
<div style="float:right;text-align:center;margin-right:50px;border:2px dotted magenta;">
<br/><br/><br/>
    <form action="includes/login-inc.php" method="POST" class="logform" >
        <input type="text" name="user" placeholder="User Name "> <br/> <br/>
        <input type="password" name="pass" placeholder="PassWord "> <br/><br/>
        <button type="submit" name="login" value="submit"><strong> LOGIN </strong></button>
        <br/><br/><br/><br/>
    </form> 
</div>
</section>
<br/>
<br/>

</body>
</html>

