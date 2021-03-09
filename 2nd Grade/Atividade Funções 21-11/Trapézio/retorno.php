<html>
<body>
    <?php
        function trapezio ($B, $b, $l1, $l2)
        {
            return $B + $b + $l1 + $l2;
        }

        $basM = $_POST['basM'];
        $basmin = $_POST['basmin'];
        $lad1 = $_POST['lad1'];
        $lad2 = $_POST['lad2'];
        $res = trapezio($basM, $basmin, $lad1, $lad2);

        echo "Perímetro = $res";
    ?>
</body>
</html>