<html>
<head>
  <title> user Login And Registration </title>
  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  </head> <!--espically made for the css-->
  <body>

<div class="container"> <!-- make container for the css-->
  <div class="login-box"> <!-- css -->

  <div class="row">
    <div class="col-md-6 login-left">       <!--login left for the css designe!-->
      <h2> Login Here </h2>
      <form action="Validation.php" method="post">
        <div cass="form-group">
          <label>Username</label>
          <input type="text" name="user" class="form-control" required>
        </div>
        <div cass="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary"> Login </button>
      </form>
      
</div>
</div>
<!-- when click on the register the it will go the the next pages where is the pages-->
<div class="col-md-6 login-right">
  <h2> Register Here </h2>
  <form action="registration.php" method="post">
    <div cass="form-group">
      <label>Username</label>
      <input type="text" name="user" class="form-control" required>
    </div>
    <div cass="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary"> Register </button>
  </form>
</div>

</div>
</div>
</div>
  </body>
  </html>
