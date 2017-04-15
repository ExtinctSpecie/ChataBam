<?php
require 'DBconnection.php';
$onlineusers = $databaseConnection->query("SELECT username FROM user ORDER BY id DESC");
$i=0;
foreach($onlineusers as $user)
{       
    echo $i.")"."<a href='#'  id='$i'>".$user['username']."</a>"."</br>";         
    $i++;
}
?>