<?php

session_start();
header('location:login.php');//after registration user redirect into login pages


$con = mysqli_connect('localhost','root',''); //this is the servername and password with username

mysqli_select_db($con, 'registration'); //userregistration is a database name 

$name = $_POST['user'];// this will post the users name
$pass = $_POST['password'];// this will post the users password

$s = "select * from usertable where name = '$name'";//here usertable is a tablename

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
  echo " Userername already taken";
}else{
  $reg= "insert into usertable(name , password) values ('$name', '$pass')";
  mysqli_query($con, $reg);
  echo" Registration successful";
}

 ?>
