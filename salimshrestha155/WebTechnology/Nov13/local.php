<html>
<head>
<title>global</title>
</head>
<body>
<?php
function keep_track()
{
	STATIC $count=1;
	print $count;
	print"<br/>";
	$count++;
}
keep_track();
keep_track();
keep_track();
?>
</body>
</html>