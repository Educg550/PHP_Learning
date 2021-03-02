<html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
    <?php
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        if ($idade >= 5 && $idade <= 7)
        {
            echo "$nome, sua classificação é Infantil A, de acordo com a sua idade: $idade anos";
        }
        else if ($idade >= 8 && $idade <= 10)
        {
            echo "$nome, sua classificação é Infantil B, de acordo com a sua idade: $idade anos";
        }
        else if ($idade >= 11 && $idade <= 13)
        {
            echo "$nome, sua classificação é Juvenil A, de acordo com a sua idade: $idade anos";
        }
        else if ($idade >= 14 && $idade <= 17)
        {
            echo "$nome, sua classificação é Juvenil B, de acordo com a sua idade: $idade anos";
        }
        else if ($idade >= 18)
        {
            echo "$nome, sua classificação é Senior, de acordo com a sua idade: $idade anos";
        }
        else
        {
            echo "ERRO! Verifique a idade e tente novamente!";
        }
    ?>

</body>
</html>