<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $array1 = array(1, 2, 3, 4, 5);
    $array2 = array(6, 7, 8, 9, 10);

    echo "First Array: <br>";
    foreach ($array1 as $value) {
        echo $value . " ";
}

    echo "<br><br>Second Array: <br>";
    foreach ($array2 as $value) {
        echo $value . " ";
}

    $mergedArray = array_merge($array1, $array2);

    echo "<br><br>Merged Array: <br>";
    foreach ($mergedArray as $value) {
        echo $value . " ";
}
?>
</body>
</html>