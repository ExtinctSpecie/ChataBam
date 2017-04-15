$('#sendmessage').submit(function ()
{
    var message = $('#message').val();    
    $.ajax(
    {
                url: "messageSendToDatabase.php",
                data:{message: message}, //first message is php variable of messageSendToDatabase.php
                success: function (data)
                {
                    $('#feedback').html(data);
                    $('#feedback').fadeIn('slow',function ()
                    {
                        $('#feedback').fadeOut(500);
                    });
                    $('#message').val('');
                }
    }); 
    return false;
});