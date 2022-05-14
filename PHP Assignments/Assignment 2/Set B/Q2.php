<html>
    <body>
        <form method="post">
            Enter String
            <input type="text" name="string"/>
            <input type="submit" name="submit"/>
        </form>
    </body>
    <?php

        $string=strtolower((string)$_POST['string']);
        echo "a : ".substr_count($string,'a')."<br>";
        echo "e : ".substr_count($string,'e')."<br>";
        echo "i : ".substr_count($string,'i')."<br>";
        echo "o : ".substr_count($string,'o')."<br>";
        echo "u : ".substr_count($string,'u')."<br>";
        

    ?>
</html>