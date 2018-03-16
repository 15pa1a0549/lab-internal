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
text:white;
padding-top:25px;
padding-bottom:25px;
 margin-top:-20px;
 word-spacing:10px;
}
body{
margin:0px;

}

h1{
 background-color:green;
 padding-bottom:20px;
 text-align:center;
}



.c{

   background-color: red;
}
h2{
 background-color:red;
 margin-top:-20px;
 text-align:center;

}s

</style>

<html>
  <head>
  <link rel="stylesheet" type="text/css" href="signin.css">  
    <div class="b">
  </head>
  <body>
    <div class="b">
<h1 style="color:white"> PRODUCT REVIEWS</h1></div>
<div class="c">
<center>

<div class="g">
<center>
<span><a href="home.php" style="color:white">Home</a> <a href="login.php" style="color:white">Admin</a> <a href="sigin.php" style="color:white;">signin</a> <a href="login.php" style="color:white">login</a></div></center></div></td></tr></div>
 </center>
 <h2 style="color:black">Admin page</h2>
    
<form action="">
  
  <div class="b">
  <label ><b>E-mail</b><lable>
  <input type="text" placeholder="Example@gmail.com" name="email" required>
    <label ><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label ><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
  <a href="admin2.php">  <button type="submit">Login</button></a>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="b" >
    <button type="button" class="c">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>

 </body>
</html>
