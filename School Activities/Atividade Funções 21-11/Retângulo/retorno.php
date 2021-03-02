<html>
<body>
    <?php
        function retangulo ($b, $h)
        {
            return (2 * $b) + (2 * $h);
        }

        $bas = $_POST['bas'];
        $alt = $_POST['alt'];
        $res = retangulo($bas, $alt);

        echo "Perímetro = $res";
    ?>
</body>
</html>