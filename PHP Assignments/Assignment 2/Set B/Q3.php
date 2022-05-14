<html>
    <body>
        <form method="post">
            num1
            <input type="number" name="num1">
            <br>
            <br>
            num2 
            <input type="number" name="num2">
            <br>
            +
            <input type="radio" name="operator" value="+">
            <br>
            -
            <input type="radio" name="operator" value="-">
            <br>
            *
            <input type="radio" name="operator" value="*">
            <br>
            /
            <input type="radio" name="operator" value="/">
            <br>
            <input type="submit" name="submit"/>
        </form>
    </body>
    <?php

        $operator=$_POST['operator'];
        $num1=(int)$_POST['num1'];
        $num2=(int)$_POST['num2'];
        switch($operator){
            case '+':
                echo "Ans. ".$num1+$num2;
                break;
            case '-':
                echo "Ans. ".$num1-$num2;
                break;
            case '*':
                echo "Ans. ".$num1*$num2;
                break;
            case '/':
                echo "Ans. ".$num1/$num2;
                break;
        }

    ?>
</html>