<?php
require 'checkIfUserAlreadyLoggedIn.php';
?>


<html>
    
<head>
        
<title>Login ChatBam</title>
        
<link type="text/css" rel="stylesheet" href="css/index.css">
    
</head>
    
<body>
        
<div id=logo>Welcome to ChatBam</div>
<form action="logIn.php" method="post" name="">
            
   
<input type="text" id='username' name='username' placeholder="Username">
 
<span class="charactersmsg" >*Put at least 8 characters.</span>  
<input type="submit" id='login' name='login' value="Log In">
            
  
</form>
        
<canvas id="a" width="200" height="200">
 
This text is displayed if your browser does not support HTML5 Canvas.
        
</canvas>
 
<div id="leftLayout">
<div id="leftHeader">The chat of 2016<br></div><br>
 <ul>
  <li>Meet strangers from all the world</li><br>
  <li>Chat with a lot of people</li><br>
  <li>Chat with someone in private</li><br>
  <li>Create chat rooms</li><br>
  <li>We don't store any information about you</li><br>
  <li>Thousands of people are waiting to chat with you</li><br>
</ul> 
</div>
<div id="rightLayout">
<img id="chitChatImg" src="images/logo-bg.png">
<div>
<div id="footer">
Copyright © ChatBam.com By <b>SKARRA</b> and <b>GOMARTELI</b>
</div>       
    
</body> 

</html>