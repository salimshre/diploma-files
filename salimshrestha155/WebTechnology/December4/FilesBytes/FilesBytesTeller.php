<?php
	$filename="app.txt";
	$file=fopen($filename,"r");
	if($file==false){
		echo"Error Openinig the File.";
		exit();
	}
	fwrite($file,"This is a simple test \n");
	$filesize=filesize($filename);
	$filetext=fread($file,$filesize);
	fclose($file);
	echo("file size: $filesize bytes");
	echo("$filetext");
	echo("filename:$filename");

?>