<html>
    <body>
        <form method="post">
            <input type="number" placeholder="Enter a Number"  name="number"/><br>
            Insert
            <input type="radio" name="operation" value="insert"/><br>
            Delete
            <input type="radio" name="operation" value="delete"/><br>
            <input type="submit" name="submit"/>
        </form>
    </body>
    <?php
        $elems=array("FIRST","SECOND","THIRD","FOURTH","FIFTH");
        switch($_POST['operation']){
            case 'insert':
                array_push($elems,$_POST['number']);
                print_r($elems);
                break;
            case 'delete':
                array_pop($elems);
                print_r($elems);
                break;
        }
    ?>
</html>