<?php
include("header.php");
if(isset($_POST['name'])|| isset($_POST['age'])|| isset($_POST['contact'])){
	if($_POST['name']&&$_POST['age']){
		echo"Welcome ".$_POST['name']."<br/>";
		echo"You are ".$_POST['age']." years old ";
		echo"let see ".$_POST['contact'];
		exit();
	}
	else{
		die("please fill the field");
	}
}
?>
<html>
<body>
	<form action="<?php $_PHP_SELF?>"
		Method="POST">
		Name:<input type="text" name="name"/>
		age:<input type="text" name="age"/>
		contact:<input type="text" name="contact"/>
		<input type ="submit"/>
	</form>

	</body>
	</html>