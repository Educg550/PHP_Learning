<!DOCTYPE html> <html>

<head>

	<title>Exercicio 4</title>
</head>
<style>

p, h2, h5, h4 {
color: white;
display:inline;
}

body {background-color: black;}

</style>

<body>

<?php
$n = $_POST['n'];

$i = 1;

while($i<= $n) { if ($i < $n){ echo "<h4>$i + </h4>";}

$vfinal += $i;

$i++;

} 

echo "<h4>$n = $vfinal</h4>"; ?>

</body></html>
