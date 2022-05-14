<html>
    <body>

        <form method="post">
            Merge Two Arrays
            <input type="radio" name="operation" value="merge"/><br><br>
            Find The Intersection
            <input type="radio" name="operation" value="intersection"/><br><br>
            Find The Union
            <input type="radio" name="operation" value="union"/><br><br>
            Find The Set Difference
            <input type="radio" name="operation" value="diff"/><br><br>
            <input type="submit" name="submit"/>
        </form>

    </body>
    <?php
        $array1=array(1,2,3,4,5,6,7);
        $array2=array(6,7,8,9,10);
        switch($_POST['operation']){
            case 'merge':
                print_r(array_merge($array1,$array2));
                break;
            case 'intersection':
                $elems=array_intersect($array1,$array2);
                print_r($elems);
                break;
            case 'union':
                $elems=array_unique(array_merge($array1,$array2));
                print_r($elems);
                break;
            case 'diff':
                $elems=array_diff($array1,$array2);
                print_r($elems);
                break;
        }
    ?>
</html>