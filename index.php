<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
</head>
<body>
	<?php
$car = array(41, 22, 46, 7, 0, -2, -3, 41, 0, -17, -1);
$cor = 0;
for ($i=0; $i<=count($car); $i++) { 
	if ($car[$i]>=0) {
		$cor = $cor + $car[$i];
	}
}

echo "$cor";




	?>




</body>
</html>