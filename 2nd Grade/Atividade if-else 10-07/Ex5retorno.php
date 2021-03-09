<html>

<head>
</head>

<body>

<?php

    $num = $_POST['num'];

    if ($num % 2 == 0)
    {
        echo 'O número é par';
    }
    elseif ($num % 2 != 0)
    {
        echo 'O número é ímpar';
    }

?>

</body>

</html>