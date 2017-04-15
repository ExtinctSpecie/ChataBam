<?php
session_start();
if(!isset($_SESSION['username']))
    header("Location: index.php");
?>

<html>
    <head>
        
<title>ChatBam</title>  
        
        <link type="text/css" rel="stylesheet" href="css/chatpage.css">       
    </head>
    
<body>
<div id="quote1">
<pre>
Everybody
  Needs
Somebody
Sometimes
</pre>
</div>
<div id="quote2">
<pre>
   I Don't
Want To Be
    Alone
 
</pre>
</div>
  
            <div id="container">
                <div id="chatHeader">
                    <div id="userinfo">
                        <?php
                            echo "<h3>"."Welcome".": ".$_SESSION['username']."</h3>";
                        ?>
                    </div> 
                    <div id="logoutbutton">
                        <form id="logout" action="logout.php" method="post">
                            <input id="" type="submit" value="Log Out" >
                        </form>     
                    </div>                     
                </div>
                
                <div id="chatAndUserBox">
                    <div id="messages">  

                    </div>  
                    <div id="onlineusers"> 
                        
                    </div>
                </div>                
                <div id="chatBottom">
                    <form id="sendmessage" action="" method="post">                            
                        <textarea id="message" type="text" placeholder="Write message"></textarea>                            
                       
 <input id="sendmessagebutton" type="submit" value="Send" onkeypress="addInputSubmitEvent()">
                   
 </form> 
                </div>                  
            </div>             
 
   <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/refreshChat.js"></script>
  
  <script type="text/javascript" src="js/refreshUsers.js"></script>
    <script type="text/javascript" src="js/pmOnClick.js"></script>
  
  <script type="text/javascript" src="js/sendMessageToDatabase.js"></script>
    <script type="text/javascript" src="js/onEnterSubmitForm.js"></script>
 
   <img id="girl" src="images/girl.jpg"> 
   <img id="boy" src="images/boy.jpg"> 
</body>

</html>