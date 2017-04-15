<?php
require './DBconnection.php';
require 'sessionUnset.php';
session_start();
if(isset($_SESSION['username']))
{
    $databaseConnection->query("DELETE FROM user WHERE username = '{$_SESSION['username']}'");
    unsetSession();
    header("Location: index.php");    
}
else
{
   
}
