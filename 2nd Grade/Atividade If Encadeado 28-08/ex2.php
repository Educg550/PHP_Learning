<html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    
    <h1>Nome e Estado Civil</h1>

    <p>Insira os dados abaixo:</p>

    <form action="ex2retorno.php" method="post">

        <p><input type="text" name="nome" placeholder="Nome"></p>
        <p><input type="radio" name="radsex" value="masculino" checked> Masculino</p>
        <p><input type="radio" name="radsex" value="feminino"> Feminino</p>
        <p><input type="text" name="civil" placeholder="Estado Civil"></p>
        <p><input type="submit" value="Enviar"></p>

    </form>

</body>
</html>