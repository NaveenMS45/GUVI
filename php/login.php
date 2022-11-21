<?php_
    if(isset($_POST['login'])){
        $connect = new mysqli(host: 'localhost', username: 'root', password: '', dbname:'login')

        $username = $connect->real_escape_string($_POST['usernamePHP']);
        $password = $connect->real_escape_string($_POST['passwordPHP']);

        $data = $connect->query(query: "SELECT id FROM users WHERE username='$username' AND password='$password'");
        if ($data->num_rows > 0){
            exit("success");
        }else{
            exit("failed");
        }
        exit($username ." = " . $password);
    }
?>