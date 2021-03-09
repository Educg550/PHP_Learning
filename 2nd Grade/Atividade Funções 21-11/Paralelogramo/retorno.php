<html>
<body>
    <?php
        function paralelogramo ($b, $l)
        {
            return (2 * $b) + (2 * $l);
        }

        $bas = $_POST['bas'];
        $lad = $_POST['lad'];
        $res = paralelogramo($bas, $lad);

        echo "Perímetro = $res";
    ?>
</body>
</html>