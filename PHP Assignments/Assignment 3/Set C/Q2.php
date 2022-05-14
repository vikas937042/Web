<html>
    <body>
    <form method="post">
            Sort in Ascending and Descending order
            <input type="radio" name="operation" value="sort_values"/><br><br>
            Sort in Ascending and Descending order By Keys
            <input type="radio" name="operation" value="sort_keys"/><br><br>
            Odd Elements
            <input type="radio" name="operation" value="odd"/><br><br>
            <input type="submit" name="submit"/>
        </form>
    </body>
    <?php
        $array=array('a'=>'1','c'=>'3','b'=>'2','d'=>'4');
        switch($_POST['operation']){
            case 'sort_values':
                echo "In Ascending Order";
                sort($array);
                print_r($array);
                echo "<br>In Descending Order";
                rsort($array);
                print_r($array);
                break;
            case 'sort_keys':
                echo "In Ascending Order";
                ksort($array);
                print_r($array);
                echo "<br>In Descending Order";
                krsort($array);
                print_r($array);
                break;
            case 'odd':
                foreach($array as $key){
                    if($key%2!=0){
                        echo $key;
                    }
                }
                break;
        }
    ?>
</html>