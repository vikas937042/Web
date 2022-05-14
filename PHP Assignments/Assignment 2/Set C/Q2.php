<html>
    <body>

        <form method="post">
            Enter details of 5 Items Follwed by ','<br><br>
            Item code
            <input type="text" name="item_code"/><br><br>
            Item name
            <input type="text" name="item_name"/><br><br>
            Units Sold
            <input type="text" name="units_sold"/><br><br>
            Rate
            <input type="text" name="rate"/><br><br>
            <input type="submit" name="submit"/><br><br>

        </form>

    </body>
    <?php

        $item_codes=explode(',',$_POST['item_code']);
        $item_names=explode(',',$_POST['item_name']);
        $units_sold=explode(',',$_POST['units_sold']);
        $rates=explode(',',$_POST['rate']);
        
        echo "<table>";
        echo "
                <tr>
                    <th style=\" border: 1px solid black\">No.</th>
                    <th style=\" border: 1px solid black\">item_name</th>
                    <th style=\" border: 1px solid black\">units_sold</th>
                    <th style=\" border: 1px solid black\">rate</th>
                    </tr>";
        
        for($i=0;$i<sizeof($item_codes);$i++){
            echo "
                    <tr>
                        <td style=\" border: 1px solid black\">$item_codes[$i]</td>
                        <td style=\" border: 1px solid black\">$item_names[$i]</td>
                        <td style=\" border: 1px solid black\">$units_sold[$i]</td>
                        <td style=\" border: 1px solid black\">$rates[$i]</td>
                    </tr>
            ";
        }
        echo "</table>";

    ?>
</html>