<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    settype($var,"boolean");
        echo"<b> After Converting to Boolean:</b>";
        var_dump($var);
        echo"<br><b>Data type:</b>" .gettype($var);
    ?>
</body>
</html>