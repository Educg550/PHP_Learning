<html>

<head>
</head>

<body>

<?php

    $peixe = $_POST['kg'];

    if ($peixe > 50)
    {
        $multa = 0;

        while ($peixe > 50)
        {
            $multa += 4;
            $peixe -= 1;
        }

        $excesso = $multa / 4;

        echo "O seu limite de peixe foi excedido em $excesso KG, portanto a sua multa é de R$$multa,00";
    }
    else
    {
        echo 'Quantidade permitida, pode passar';
    }
    
?>

</body>

</html>