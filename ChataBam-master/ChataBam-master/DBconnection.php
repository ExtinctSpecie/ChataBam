<?php

$server_host = 'localhost';
$server_password = 'root';
$server_user = 'root';
$db_name = 'chatproject';
$DBnotifications = array();

$databaseConnection =new mysqli($server_host,$server_user,$server_password,$db_name);

if ($databaseConnection->error)
{
    $DBnotifications[] = "Couldn't Connect To Database";
}
else
{
    $DBnotifications[] = "Successfully Connected To Database";
}