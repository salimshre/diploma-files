<?php

session_start();
if(!isset($_SESSION['username'])){        //if session variable will not set header to the login pages will be login.php
  header('location:login.php');
}

 ?>
 <html>
 <head>
   <titile> Home page </title>
     <link rel="stylesheet" type="text/css" href="style.css">
       <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   </head>
   <body>

    <div class="container">
     <a class="float-right" href="logout.php"> LOGOUT </a>  <!-- this will add logout option -->
     <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>  <!-- session variable come from the validation line 19 this session will tell you name when login -->
   </div>

   </body>
   </html>
