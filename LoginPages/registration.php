<?php

session_start();
header('location:login.php');


$con = mysql_connect('localhost','root','');

mysqli_select_db($con, 'app');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($reslut);

if($num == 1){
  echo" Userername already taken";
}else{
  $reg "insert into usertable(name , password) values ('$name', '$pass')";
  mysqli_query($con, $reg);
  echo" Registration successful";
}

 ?>
