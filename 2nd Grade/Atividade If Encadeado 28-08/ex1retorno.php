<html>

<body>

	<?php
        $alt = $_POST['alt'];
        $peso = $_POST['peso'];
        $alt = floatval($alt);
        $peso = floatval($peso);
        $imc = $peso / ($alt * $alt);

        if ($imc < 18.5)
        {
            echo "Seu IMC é $imc, você está abaixo do peso!";
        }
        else if ($imc >= 18.5 && $imc <= 25)
        {
            echo "Seu IMC é $imc, seu peso está normal";
        }
        else if ($imc > 25 && $imc <= 30)
        {
            echo "Seu IMC é $imc, você está acima do peso!";
        }
        else
        {
            echo "ERRO! Verifique os dados e tente novamente!";
        }
    ?>

</body>

</html>