<html>

<head>
</head>

<body>

<?php

    $idade = $_POST['idade'];

    if ($idade >= 16)
    {
        echo 'Pode dirigir';
    }
    else
    {
        echo 'Não pode dirigir';
    }
    
?>

</body>

</html>