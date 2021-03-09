<html>
<body>
    <?php
        $num = $_POST['input'];
        $fat = 1;

        for ($i = 2; $i <= $num; $i++)
        {
            $fat *= $i;
        }

        echo "O fatorial do número $num é: $fat";
    ?>
</body>
</html>