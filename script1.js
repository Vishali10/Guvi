$(document).ready(function(){
    $("#button1").click(function(){
        var email = $("#email").val().trim();
        if( email != ""){
            $.ajax({
                url:'checkuser.php',
                type:'post',
                data:{email:email},
                success:function(response){
                    var msg = "";
                    if(response == 1){
                        window.location = "index.php";
                    }else{
                        msg = "Invalid username and password!";
                    }
                    $("#message").html(msg);
                }
            });
        }
    });
});
