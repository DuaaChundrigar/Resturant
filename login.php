<?php
$conn = new mysqli('localhost', 'root', '' , 'resturant');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 session_start();

 if(isset($_POST['email'])){


$id = $_POST['id'];
$name=$_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$md_pass = md5($password);

// //$remember = $_POST['remember'];

// // if($remember==1)
// // {
// //   setcookie('email' , $email , time()+60*60*7 );

// // }

$sql = "SELECT * FROM customers WHERE email = '$email' AND password = '$md_pass' LIMIT 1";
$result = $conn -> query($sql) ;

if ($result->num_rows > 0) {
   
  $_SESSION['email'] = $email;
  
  header( 'Location: index.php');

} else {
  header( 'Location: register_login.php');
}

  }

?>