<?php
session_start();
session_destroy();  // session come from home.php files

header('location:login.php');

 ?>
