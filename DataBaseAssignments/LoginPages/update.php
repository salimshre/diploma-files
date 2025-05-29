<?php
include("dbconnect.php");
error_reporting(0);
$_GET['fn'];
$_GET['ln'];
$_GET['co'];
?>

<form action="post" method="GET">
  First name <input type="text" name="first name" value="<?php $_GET['fn']; ?>"/><br><br>
  lastname <input type="text" name="name" value="<?php $_GET['ln']; ?>"/><br><br>
  contact <input type="text" name="name" value="<?php $_GET['co']; ?>"/><br><br>
  <input type="submit" name="submit" value="update"/>
</form>

<?php
if($_GET['submit'])
{
  echo "Button Pressed";
}
else {
    echo "<font color='blue'> click on update button to save the changes";
}
?>
