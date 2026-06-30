<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $array = array(10, 20, 30, 40, 50);

    echo "Original Array: <br>";
    foreach ($array as $value) {
        echo $value . "<br>";
    }

    $reversedArray = array_reverse($array);

    echo "<br>Reversed Array: <br>";
    foreach ($reversedArray as $value) {
     echo $value . "<br>";
    }
?>
</body>
</html>