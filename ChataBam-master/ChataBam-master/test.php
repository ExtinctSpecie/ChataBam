<?php
session_start();
require './DBconnection.php';


//$getGlobalData = $databaseConnection->query("SELECT fromusername,tousername,message FROM globalmessage where created >= (SELECT created FROM user where username= 'testuser15')  ");
$getGlobalData = $databaseConnection->query("SELECT fromusername,tousername,message FROM globalmessage where created >= (SELECT created FROM user where username= 'necrothaft1s') ORDER BY created DESC ");
foreach($getGlobalData as $data)
{ 
    echo '<strong>'.$data['fromusername'] .''.'</strong>';
    echo '<strong>'.'-->'.$data['tousername'] .': '.'</strong>';
    echo '<span style="color:#cc00cc">'.$data['message']."</br>"."</br>".'</span>';
}