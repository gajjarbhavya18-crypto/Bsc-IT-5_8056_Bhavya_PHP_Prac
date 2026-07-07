<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Enter 5 numbers:</h2>
    <form method="post">
        <input type="text" name="num1"><br><br>
        <input type="text" name="num2"><br><br>
        <input type="text" name="num3"><br><br>
        <input type="text" name="num4"><br><br>
        <input type="text" name="num5"><br><br>
        <input type="submit" value="Show">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $n3 = $_POST['num3'];
        $n4 = $_POST['num4'];
        $n5 = $_POST['num5'];

        echo "<h3>You entered:</h3>";
        echo "$n1, $n2, $n3, $n4, $n5";
    }
    ?>
</body>
</html>