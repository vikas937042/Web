<html>
    <body>
        <form method="post">
            String 1
            <input type="text" name="string1"/><br><br>
            String 2
            <input type="text" name="string2"/><br><br>
            <input type="number" name="position" placeholder="enter the position"/><br><br>
            <input type="submit" name="submit"/>

        </form>
    </body>
    <?php
        $string1=$_POST['string1'];
        $string2=$_POST['string2'];
        $position=$_POST['position'];
        if($string1==$string2){
            echo "Both Strings are Equal (Using '==' operator)<br>";
        }
        if(strcmp($string1,$string2)==0){
            echo "Both Strings are Equal (Using strcmp() function)<br>";            
        }
        else{
            echo "Strings are not equal<br>";
        }
        echo " The concatenated string is ".$string1.$string2."<br>";
        echo $string1[$position-1];
        echo "The Reversed String is ".substr($string1,0,$position).strrev(substr($string1,$position));

    ?>
</html>