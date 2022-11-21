$(document).ready(function(){
   $("#login").click( function(){
        var username = $("#username").val();
        var password = $('#password').val()
        // console.log(username,password);

        if(username == "" || password == "")
            alert("Please check your inputs");
        else{
            $.ajax({
              url: 'http://localhost/auth/php/login.php',
              method: 'POST',
              data: {
                login: 1,
                usernamePHP: username,
                passwordPHP: password,
              },
              success: function (response) {
                console.log(response)
              },
              dataType: 'text',
            })
        }    
   });
});

       