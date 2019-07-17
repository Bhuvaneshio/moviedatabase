<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <style>
    .sign form input{
    display:block;
    margin:0 auto;
    width:30%;
    height:40px;
    padding:0px 5%;
    margin-bottom:4px;
    border:none;
    background-color:#fff;
    font-family:arial;
    font-size:14px;
    color:#111;
    line-height:40px;
    border:1px solid blue;
}
.sign form input:hover{
    border:2px solid blue;
}
.sign form button:hover{
    border:2px solid gold;
}
.sign form button{
    display:block;
    margin: 0 auto;
    width:10%;
    height:40px;
    border:none;
    background-color:#222;
    cursor:pointer;
    color:#ccc;
    border:1px solid gold;
}
</style>
</head>
<body>
    <?php   include_once 'header.php'; ?>
    
    <section class="sign">
        <h2> SIGN-UP </h2>
        <h5>*fill the form below*</h5><div >
        <form action="includes/signup-inc.php" method="POST">
        <br/>
            <input type="text" name="first" placeholder="First Name">
            <input type="text" name="last" placeholder="Last Name">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="uid" placeholder="User Name">
            <input type="password" name="pwd" placeholder="PassWord">
            <button type="submit" name="submit">Sign-up</button>
        <br/>
        </form></div>
    </section>
    

</body>
</html>
<?php
/*style="border:2px dotted magenta"*/
?>