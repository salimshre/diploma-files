<?php

session_start();
if(!isset($_SESSION['username'])){        //if session variable will not set header to the login pages will be login.php
  header('location:login.php');
}
?>

<?php
include 'dbconnect.php';  // this is the connection of database

if(isset($_POST['submit'])){
  $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
  $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
  $number = mysqli_real_escape_string($conn,$_POST['contact']);

$query = "INSERT INTO addressbook(firstname,lastname,contact) VALUES('$firstname','$lastname','$number')";

if(mysqli_query($conn,$query)){
  header('Location:home.php');

}
else {
  echo "Error".mysqli_error($conn);
}
}

//get all contact list
//query
$query = 'select *from addressbook';
//get result
$result = mysqli_query($conn,$query);
//get allpost in array
$contacts = mysqli_fetch_all($result,MYSQLI_ASSOC);

//delete the contact details here
if(isset($_POST['delete'])){
  $id = $_POST['id'];
  $query = "delete from addressbook where id=$id";


  //deleting codes

  if(mysqli_query($conn,$query)){
    echo "<script>window.alert('Deleted!');</script>";
    header('Location:home.php');

  }
  else {
    echo "<script>window.alert('Failed To Delete!');</script>";
  }
}








 ?>
<html>
  <head>
    <title>Creating address books of</title>

  </head>
  <body align="center" background="salim.jpg" text="white">

      <td>
    <div class="container text-center col-lg-12">
<h1> We hardly welcome you <?php echo $_SESSION['username']; ?> </h1>





<h2 id="text">be
  <span style="display: initial;">Bold</span>
  <span>creative</span>
  <span>Amazing</span>
  <span>unique</span>
  <span>cool</span>
  <sapn>Awesome</span>
  </h2>
  <script type="text/javascript">
  var text = document.getElementById('text');
  var word = text.getElementsByTagName('span');

  var i=0;
  function rotator(){
    word[i].style.display = 'none';
    i = (i + 1) % word.length;
    word[i].style.display = 'initial';
  }
  setInterval(rotator, 800);
  </script>





      <h2>My Address Book</h2>
        <div class="col-lg-12 text-center">
          <h3>Folling lines guids you to type the address </h3>
          <form method="post">
            <div class="form-group">
              <label for="new-first-name">Your first name</label>
              <input type="text" name="firstname" class="form-control" id="new-first-name">
            </div>
            <div class="form-group">
              <label for="new-last-name">Your last name</label>
              <input type="text" name="lastname" class="form-control" id="new-last-name">
            </div>
            <div class="form-group">
              <label for="new-address">Fill Your contact Carefully</label>
              <input type="text" name="contact" class="form-control" id="new-address">
            </div>

            <input type="submit" name="submit" class="btn btn-primary">
          </form>

          </div>
        </div>
        <hr>

          <div align="center">
          <h2>My Contacts:</h2>
          <ul class="list-group">
          </ul>
                <table border="1">
                  <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Contact</th>
                    <th>Action</th>
                  </tr>
              <?php
                foreach ($contacts as $contact) {
                  ?>
                    <tr>
                      <td><?php echo $contact['firstname']; ?></td>
                      <td><?php echo $contact['lastname']; ?></td>
                      <td><?php echo $contact['contact']; ?></td>

                      <td><form method="post"><input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
                      <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                    <a href='update.php?fn=$result[firstname]&ln=$result[lastname]&co=$result[contact]'>update</a></form></td>

                    </tr>
                  <?php
                }
               ?>
             </table>
        </div>
      <footer align="center"><p><marquee>Assignment of the Data BaseManagement systems</marquee></p></footer>

</table>
<div class="container">
 <a class="float-right" href="logout.php"> LOGOUT </a>  <!-- this will add logout option -->
 </div>
 <a href="ColourChanges/index.php"><b><big>Click Here To See Magic<b></big></a>
  </body>
</html>
