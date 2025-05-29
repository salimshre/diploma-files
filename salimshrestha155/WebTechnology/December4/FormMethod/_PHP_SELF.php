<?php

if(isset($_POST['name'] && $_POST['age'])){
	echo "Welcome ".$_POST['name']."<br/>";
	echo "you are ".$_POST['age']." years old";
	exit();

	
}
else{
	die("Please fill all fields!");

}


?>