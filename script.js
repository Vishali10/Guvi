$(document).ready(function(){
    $("#button").click(function(){
        var name=$("#name").val();
        var email=$("#email").val();
        var pass=$("#pass").val();
        var cpass=$("#cpass").val();
        $.ajax({
            url:'insert.php',
            method:'POST',
            data:{
                name:name,
                email:email,
                pass:pass,
                cpass:cpass
            },
           success:function(data){
               alert(data);
           }
        });
    });
});
