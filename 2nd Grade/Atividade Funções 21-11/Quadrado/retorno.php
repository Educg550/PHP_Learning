<html>
<body>
    <?php
        function quadrado ($l)
        {
            return 4 * $l;
        }

        $lad = $_POST['lad'];
        $res = quadrado($lad);

        echo "Perímetro = $res";
    ?>
</body>
</html>