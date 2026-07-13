<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <br>Enter Number 1:<input type="number" name="num1" required></br>
        <br>Enter Number 2:<input type="number" name="num2"required></br>

    <br><label>select operator </label>
    <select name="op">
        <option value="+"> + </option><br><br>
        <option value="-"> - </option><br><br>
        <option value="*"> * </option><br><br>
        <option value="/"> / </option><br><br>
    </select>
    </br>

    <br><input type="Submit" name="Submit" value="Calculate"></br>
    </form>
    <?php
        function calculate($num1,$num2,$op){
            switch($op){
                case '+':
                    return $num1 + $num2;

                case '-':
                    return $num1 - $num2;

                case '*':
                    return $num1 * $num2;

                case '/':
                    return $num2 != 0 ? $num1 / $num2: "Cannot didivde by zero";
                
                default:
                    return "invalid operation";
            }
        }

        if(isset($_POST['Submit']))
        {
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];
            $op = $_POST['op'];

            $result = calculate($n1, $n2, $op);
            
            echo"<h2>Result: $result</h2>";
        }
    ?>

</body>
</html>