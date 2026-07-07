<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     settype($var,"double");
        echo"<b> After Coverting to double:</b>" .$var ."<br>";
        echo"<b> Data type:</b>" .gettype($var) . "<br><br>";
    ?>
</body>
</html>