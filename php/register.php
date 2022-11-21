<?php
   $conn = mysqli_connect('localhost','root','','auth'); 

if(isset($_POST['submit'])){

   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $password = md5($_POST['password']);

   $select = " SELECT * FROM register WHERE username = '$username' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

        $insert = "INSERT INTO register(username, password) VALUES('$username','$password')";
        mysqli_query($conn, $insert);
        header('location:../login.html');
      
   }

};


?>