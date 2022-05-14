<html>
    <body>
        <form method="post">
            <input type="number" placeholder="Enter a Number"  name="number"/><br>
            Insert
            <input type="radio" name="operation" value="insert"/><br>
            Delete
            <input type="radio" name="operation" value="delete"/><br>
            Show
            <input type="radio" name="operation" value="show"/><br>

            <input type="submit" name="submit"/>
        </form>
    </body>
    <?php
            $elems=array(1,2,3,4,5);
        switch($_POST['operation']){
            case 'insert':
                    array_unshift($elems,$_POST['number']);
                    print_r($elems);
                    break;
                case 'delete':
                    array_shift($elems);
                    print_r($elems);
                    break;
            case 'show':
                print_r($elems);
                break;
        }
    
    ?>
</html>