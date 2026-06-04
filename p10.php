<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $array1 = array("red", "green", "blue");

       $array2 = array("yellow", "orange", "purple");

       $mergedArray = array_merge($array1, $array2);

       echo "Merged Array:<br>";
       foreach ($mergedArray as $value) {
           echo $value . "<br>";
       }
    ?>
</body>
</html>