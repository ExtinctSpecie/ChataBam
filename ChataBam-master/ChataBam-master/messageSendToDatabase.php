<?php
require 'DBconnection.php';
session_start();  
if(isset($_SESSION['username'])) 
{
    if(isset($_GET['message']) && !empty($_GET['message']))
    {    
        //trim message get its length and its first character
        $message = $_GET['message'];
        $message = trim($message);
        $messageLength = strlen($message);
    
        $checkIfPM = substr($message,-$messageLength,1);
    
        //check if message doesnt start with " 
        if($checkIfPM != "\"")
        {
            if($databaseConnection->query("INSERT INTO globalmessage (fromusername,message,created) VALUES ('{$_SESSION['username']}','{$message}',NOW())"))
            {
                echo '<span style="color:#cc00cc">'.'Message Sent'.'</span>';
            }
            else
            {
            echo '<span style="color:red">'.'Message Wasn\'t Sent'.'</span>';
            }
        }
        // get personal message receiver's name and write to personalMessages TABLE
        else
        {
            $explodeMessage =  explode(" ", $message);
        
            $pmReciever = $explodeMessage[0];//take first word
            $pmReciever = substr($message,-$messageLength+1,strlen($pmReciever)-1);//get rid of pm symbol(")
            $pmSender = $_SESSION['username'];
            //$strlen($pmReciever)+1 because we must get rid of the whole first word 
            // "necrothaft1s -> $pmReciever = necrothaft1s , $pmReciever+1 = "necrothaft1s
            //getting message without the receiver in it        
            $message = substr($message,-$messageLength + strlen($pmReciever)+1,$messageLength -strlen($pmReciever) );
        
            if($databaseConnection->query("INSERT INTO globalmessage (fromusername,tousername,message,created) VALUES ('{$pmSender}','{$pmReciever}','{$message}',NOW())"))
            {
                echo '<span style="color:#cc00cc">'.'Message Sent'.'</span>';
            }
            else
            {
                echo '<span style="color:red">'.'Message Wasn\'t Sent'.'</span>';
            }
        }
    

    } 
    
}
else
{
    header("Location: index.php");
}

    
   