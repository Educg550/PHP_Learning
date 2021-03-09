<html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
    <?php
        $nome = $_POST['nome'];
        $radsex = $_POST['radsex'];
        $civil = $_POST['civil'];

        $civil = strtoupper($civil);

        if ($radsex == 'feminino' && $civil == 'CASADA')
        {
            echo "Olá $nome, você foi cadastrada com Sucesso";
        }
        else
        {
            echo "$nome, você não é aplicável para cadastro!";
        }
    ?>

</body>
</html>