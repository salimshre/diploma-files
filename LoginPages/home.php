<?php

session_start();
if(!isset(S_SESSION['username'])){
  header('location:login.php');
}

 ?>
 <html>
 <head>
   <titile> Home page </title>
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   </head>
   <body>
     <div class"container">
     <a class="float-right" href="logout.php" LOGOUT </a>
     <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
</div>
   </body>
   </html>
