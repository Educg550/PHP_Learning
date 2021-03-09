<!DOCTYPE html> <html>

<head>

	<title>Exercicio 2</title>
	<link rel="stylesheet" href="csshome.css">

<style>

p {
color: white;
}

body {background-color: black;}

</style>


</head> <body>

<?php

$a = $_POST['a'];

$i = 1;

do {

	$tabu = $i * $a;

	echo "<p>$a x $i = $tabu</p>";
	
	$i++;
	
} while($i<=10);


?>
</div>


</body></html>
