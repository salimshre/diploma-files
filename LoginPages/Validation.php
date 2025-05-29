<?php

session_start();

$con = mysql_connect('localhost','','');

mysqli_select_db($con, 'app');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name' && password ='$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($reslut);

if($num == 1){
  S_SESSION['username'] = $name;
  header('location:home.php');
}else{
  header('location:login.php');
}

 ?>
