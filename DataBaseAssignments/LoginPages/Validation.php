<?php

session_start();

$con = mysqli_connect('localhost','root','');       //database conection

mysqli_select_db($con, 'userregistration'); // database name of the server

$name = $_POST['user'];
$pass = $_POST['password'];
// usertable is the table name of the database
$s = "select * from usertable where name='$name' && password='$pass'";// this matches from the database which is username and the password

$result = mysqli_query($con, $s); // $s connect to the database

$num = mysqli_num_rows($result);

if($num == 1){
  $_SESSION['username'] = $name;    //session variable in the home pages
  header('location:home.php');   //if it is one then it will redirect to the home pages
}else{
  header('location:login.php');     //if it is not one then it will redirect to the login pages
}

 ?>
