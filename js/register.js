// function submitForm(){
//     var name = $('input[name=username]').val();
//     var email = $('input[name=email]').val()
//     var password = $('input[name=password]').val()
//     var age = $('input[name=age]').val()
//     var dob = $('input[name=dob]').val()
 

//     var formData = {name:name,email:email,password:password,age: age, Dob: dob}
//     $.ajax({
//       url: 'http://localhost/auth/js/register.js',
//       type: 'POST',
//       data: formData,
//       success: function (response) {
//         console.log(response);
//       },
//     })
// }

$(document).ready(function () {
  $('#register').click(function () {
        var username = $('input[name=username]').val();
        var email = $('input[name=email]').val()
        var password = $('input[name=password]').val()
        var age = $('input[name=age]').val()
        var dob = $('input[name=dob]').val()
     console.log(username,email,password,age,dob);

    if (
      username == '' ||
      email == '' ||
      password == '' ||
      age == '' ||
      dob == ''
    )
      alert('Please check your inputs')
    else {
      $.ajax({
        url: 'http://localhost/auth/php/register.php',
        method: 'POST',
        data: {
          register: 1,
          usernamePHP: username,
          emailPHP: email,
          passwordPHP: password,
          agePHP: age,
          dobPHP: dob,
        },
        success: function (response) {
          console.log(response)
        },
        dataType: 'text',
      })
    }
  })
})

