<html>
    <body>
        <form method="post">
            Flip The Array
            <input type="radio" value="flip"  name="operation"/><br>
            Show the Elements of an array in random order
            <input type="radio" value="random"  name="operation"/><br>
            <input type="submit" name="submit"/>
        </form>
    </body>
    <?php
        $elems=array("first"=>"FIRST","second"=>"SECOND","third"=>"THIRD","fourth"=>"FOURTH");
        switch($_POST['operation']){
            case 'flip':
                print_r(array_flip($elems));
                break;
            case 'random':
                $tempArray=shuffle($elems);
                print_r($tempArray);
                break;

        }
    ?>
</html>