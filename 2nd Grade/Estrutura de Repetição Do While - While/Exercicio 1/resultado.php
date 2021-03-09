<!DOCTYPE html> <html>

<head>

	<title>Exercicio 1</title>

<style>

p, h2, h5, h3 {
color: white;
display:inline;
}

body {background-color: black;}

</style>

</head>


<body>

<?php
$valorgg = $_POST['valorgg'];

$fatorial = 1;

echo "<h3>$valorgg! = </h3>";

$i = 1;

while ($i <= $valorgg) {
$fatorial *= $i;

if ($i < $valorgg){
echo "<h3>$i * </h3>"; }

$i++;

}

echo "<h3>$valorgg = $fatorial</h3>";


?>



</body>

</html>
