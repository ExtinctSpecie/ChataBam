<?php
require 'DBconnection.php';
$username = $_POST['username'];
session_start();
if(isset($username))
{
    $username = trim($username);
    $usernameLength = strlen($username);
    
    if(!!preg_match("/^[a-zA-Z\d\w]+$/",$username) && $usernameLength >=8)
    {
        $databaseConnection->query("INSERT INTO user (username,created) VALUES ('{$username}',NOW())");
        //check if there was any row affected in the database(if user is inserted)
        if($databaseConnection->affected_rows>0)
        {
            header("Location: chatPage.php");
            $_SESSION['username']=$username;
        }
        else
        {
            header("Location: index.php");
        }
        
    }
    else
    {
         header("Location: index.php");
    }
    
}
else
{
     header("Location: index.php");
}