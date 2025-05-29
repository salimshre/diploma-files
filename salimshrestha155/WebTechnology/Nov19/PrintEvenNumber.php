<?php
for($i=2; $i<50; $i++)
{
	for($j=2; $j<=$i; $j++)

if($i%$j==0)
{
	if($i==$j)
		echo "$i <br/>";
	else
	 	break;


}
}



?>