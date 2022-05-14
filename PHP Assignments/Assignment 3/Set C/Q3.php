<html>
    <body>

    </body>
    <?php
        $array1=array(1,3,2,5,7);
        $array2=array(22,11,13,14,15);
        array_multisort($array1,SORT_ASC,$array2,SORT_DESC);
        print_r($array1);
        print_r($array2);
        echo "<br>";
    ?>
</html>