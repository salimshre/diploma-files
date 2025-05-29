<?php
	$marks=array(
		"LaL"=> array(
			"Physics"=>50,
			"Maths"=>70,
			"Web"=>60
		),
		"Birat"=>array(
			"Physics"=>40,
			"Maths"=>60,
			"Web"=>50
		),
		"Tik"=>array(
			"Physics"=>32,
			"Maths"=>32,
			"Web"=>40
		)

);
/*According multi-dimensional array values */
echo "marks for Birat in web is ".$marks ['Birat']['Web'];
$marks['Tik']['Maths']=60;
echo "<br/>";

echo "marks for Tik in web is ".$marks ['Tik']['Maths'];


echo '<pre>';
print_r($marks);


?>