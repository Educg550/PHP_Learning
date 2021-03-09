<html>

<head>
</head>

<body>

<?php

    $senha = $_POST['senha'];

    if ($senha == 'batatafrita')
    {
        echo 'Acesso permitido';
    }
    else
    {
        echo 'Você não tem acesso ao sistema';
    }

?>

</body>

</html>