<?php
	if(isset($_COOKIE["name"]))
		echo"Welcome back ".$_COOKIE["name"];
	else
		echo"sorry! NOT recognized:";


?>