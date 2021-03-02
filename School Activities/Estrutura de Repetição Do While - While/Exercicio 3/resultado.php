<!DOCTYPE html> <html>

<head>

	<title>Exercicio 3</title>

<style>

p, h2, h5, h3 {
color: white;
display:inline;
}

body {background-color: black;}

</style>

</head><body>


<?php
$n = $_POST['n'];

$i = 1;

do {

if ($i < $n){
echo "<h3>$i + </h3>";}
$i++;	
} while($i<= $n);

$formula = ($n + 1) * $n/2;
echo "<h3>$n = $formula</h3>";
?>
</div>


</body>

</html>
