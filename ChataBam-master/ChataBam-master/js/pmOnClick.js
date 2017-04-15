$(document).ready(function ()
{
   $('#onlineusers').on('click',event,function(){
        //idClicked = event.target.id;
        //alert(idClicked);
       // alert($(event.target).text());
      // $("#message").text($(event.target).text());
      if(event.target.id!="onlineusers")
      {
        $("#message").val('"'+$(event.target).text()+" ");      
        $("#message").focus();          
      }
       
       //$("#message").text("hello");
    });
    
});