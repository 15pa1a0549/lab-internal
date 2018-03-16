<?php 
include "connect.php";
session_start();

if(isset($_POST['sub'])) {
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $qry = "INSERT INTO `sigin` ( `username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
        mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        header('location:logout.php');
    }
?>


<style>


input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid;
   
}

button {
    background-color: green;
    color: white;
    padding: 14px 20px;
   
    border: none;


}



.g{
background-color:darkblue;
text-align:center;
padding-top:25px;
padding-bottom:25px;
 margin-top:-20px;
 word-spacing:10px;
}
body{
margin:0px;

}
h2{
 background-color:red;
 margin-top:-20px;
 text-align:center;

}

h1{
 background-color:green;
 padding-bottom:20px;
 text-align:center;
}



.c{

   background-color: red;
}



</style>

<html>
  <head>
  <link rel="stylesheet" type="text/css" href="signin.css">  
  </head>
  <body>
    
  
    

    <div class="b">
<h1 style="color:white"> PRODUCT REVIEWS</h1></div>



<div class="g">

<span><a href="home.php" style="color:white">Home</a> <a href="login.php" style="color:white">Admin</a> <a href="sigin.php" style="color:white;">signin</a> <a href="login.php" style="color:white">login</a></div></center></div></td></tr></div>
 
 <h2 style="color:black">sigin page</h2>
<form action="sigin.php" method="post">
  
  <div class="b">
  
  <label ><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
  <label ><b>E-mail</b><lable>
  <input type="text" placeholder="Example@gmail.com" name="email" required>
    

    <label ><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    
          

   
  <a href="">  <button type="submit" name="sub">Login</button></a>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    
      <a href="logout.php">  <button type="submit">siginup</button></a>
      
  </div>

  <div class="b" >
    <button type="button" class="c">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</html>
