<html>

<head>
</head>

<body>

<?php

    $num = $_POST['num'];

    if ($num > 10)
    {
        echo 'O número é maior que 10';
    }
    elseif ($num == 10)
    {
        echo 'O número é igual a 10';
    }
    else
    {
        echo 'O número é menor que 10';
    }

?>

</body>

</html>