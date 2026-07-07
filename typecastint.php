<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        settype($var,"integer");
        echo"<b> after Typecasting: </b>" . $var . "</br>";
        echo"<b>New Data Type <b>" .gettype($var) . "<br><br>";
    ?>
</body>
</html>