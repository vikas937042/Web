<html>
    <body>
        
    </body>
    <?php
        $elems=array("FIRST","SECOND","THIRD","FOURTH");
        echo "The Original Array is <br>";
        foreach($elems as $elem){
            echo $elem."<br>";
        }
        echo "The Reversed Arrray Is<br>";
        $reverse = array_reverse($elems);
        print_r($reverse);
    ?>
</html>