<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
<tiitle>user registration system using php and MYSQL</titile>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2> Homne page</h2>
  </div>

  <div class="content">
    <?php if(isset($_SESSION['success'])):
    ?>
    <div class="error success">
      <h3>
        <?php
        echo $_SESSION['sucess'];
        unser($_SESSION['success']);
        ?>
      </h3>
    </div>
  <?php endif ?>

  <?php if (isset($_SEESSION["username"])); ?>
  <p> Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
  <p> <a href="index.php?logout='1' " style="color: red;">logout</a></p>
<?php endif ?>
  </div>
</html>
