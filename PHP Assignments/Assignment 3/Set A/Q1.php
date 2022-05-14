<html>
    <body>
        <form method="post">
            Display the element of an array along with its keys
            <input type="radio" value="display"  name="operation"/><br>
            Dispay the size of an array
            <input type="radio" value="size"  name="operation"/><br>
            <input type="submit" name="submit"/>
        </form>
    </body>
    <?php
        $elems=array("first"=>"FIRST","second"=>"SECOND");
        switch($_POST['operation']){
            case 'display':
                print_r($elems);
                break;
            case 'size':
                echo "The size of a Array is ".sizeof($elems);
                break;
        }
    ?>
</html>