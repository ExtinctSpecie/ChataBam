$(document).ready(function ()
{
    var interval = setInterval(function(){
        $.ajax({
           url:'onlineUsersDisplay.php',          
           success:function(data){
           $('#onlineusers').html(data);
           }
       });
    },2000);
    
});