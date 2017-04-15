$("#message").keyup(function(event){
    if(event.keyCode == 13){
        $("#sendmessagebutton").click();
    }
});