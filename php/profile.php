//  $host = 'localhost';
//  $username = 'root';
//  $password = '';

//  try{
//      $conn = new PDO("mysql:host=$host;dbname=auth",$username,$password);
//      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//  }
//  catch(PDOException $e)
//  {
//      echo "connection failed: " . $e->getMessage();
//  }
//  if(isset($_POST['username']) && $_POST['username']!='' && 
//  isset($_POST['email']) && $_POST['email']!='' && 
//  isset($_POST['password']) && $_POST['password']!='' 
//  isset($_POST['age']) && $_POST['age']!='' && 
//  isset($_POST['dob']) && $_POST['dob']!='' 
//  )
//  {
//      $sql = "INSERT INTO register(username,password) 
//              VALUES('".addslashes($_POST['username'])."','".addslashes($_POST['password'])."')";
//      $conn->query($sql);
//  }



//   $sql = "INSERT INTO register(username,password) 
//              VALUES('".addslashes($_POST['username'])."','".addslashes($_POST['email'])."'
//              ,'".addslashes($_POST['password'])."','".addslashes($_POST['age'])."' 
//              ,'".addslashes($_POST['dob'])."','".addslashes($_POST['phone'])."')";
//      $conn->query($sql); 

